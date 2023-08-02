<?php

namespace App\Http\Controllers;

use App\Models\Metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    function index()
    {
        return view('profile.index');
    }

    function update(Request $request)
    {
        // Melakukan Validasi
        $request->validate(
            [
                'foto' => 'mimes:jpeg,jpg,png,gif',
                'email' => 'required | email'
            ],
            [
                'foto' => 'Foto yang dimasukan harus JPEG,JPG,PNG,GIF',
                'email.required' => 'Email Wajib Diisi',
                'email.email' => 'Format Email yang dimasukan tidak valid'
            ]

        );

        // Memasukan Data ke Database
        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto'), $foto_baru);

            // Untuk Melakukan Update Foto Profile Lama Ke Terbaru
            $foto_lama = get_meta_value('foto');
            File::delete(public_path('foto') . "/" . $foto_lama);

            Metadata::updateOrCreate(['meta_key' => 'foto'], ['meta_value' => $foto_baru]);
        }

        Metadata::updateOrCreate(['meta_key' => 'email'], ['meta_value' => $request->email]);
        Metadata::updateOrCreate(['meta_key' => 'kota'], ['meta_value' => $request->kota]);
        Metadata::updateOrCreate(['meta_key' => 'provinsi'], ['meta_value' => $request->provinsi]);
        Metadata::updateOrCreate(['meta_key' => 'nohp'], ['meta_value' => $request->nohp]);

        // AKun Media Sosial
        Metadata::updateOrCreate(['meta_key' => 'facebook'], ['meta_value' => $request->facebook]);
        Metadata::updateOrCreate(['meta_key' => 'x'], ['meta_value' => $request->x]);
        Metadata::updateOrCreate(['meta_key' => 'instagram'], ['meta_value' => $request->instagram]);
        Metadata::updateOrCreate(['meta_key' => 'linkedin'], ['meta_value' => $request->linkedin]);
        Metadata::updateOrCreate(['meta_key' => 'github'], ['meta_value' => $request->github]);



        return redirect()->route('profile.index')->with('success', 'Berhasil Update Data Profile');
    }
}
