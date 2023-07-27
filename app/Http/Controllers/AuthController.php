<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    function index()
    {
        return view('auth.index');
    }

    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function callback()
    {
        // Menangkap Data
        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $email = $user->email;
        $name = $user->name;
        $avatar = $user->avatar;
        // End Menangkap User


        // Filter Akun / Pengecekan Akun yang sudah terdaftar
        $cekAkun = User::where('email', $email)->count();
        if ($cekAkun > 0) {

            // Mengambil gambar dan memasukan ke folder lalu ke database
            $avatar_file = $id . ".jpg";
            $fileContent = file_get_contents($avatar);
            File::put(public_path("Majestic/template/images/faces/$avatar_file"), $fileContent);

            // Menambah Data Di database
            $user = User::updateOrCreate(['email' => $email], ['name' => $name, 'google_id' => $id, 'avatar' => $avatar_file]);

            // Cek Sesi
            Auth::login($user);

            // Mengarahkan Ke Dashboard index
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('auth')->with('error', 'Your account is not registered');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->to('auth');
    }
}
