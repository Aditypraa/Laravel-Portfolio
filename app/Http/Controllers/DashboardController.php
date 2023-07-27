<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function index()
    {
        // Menampilkan Data di halaman Dashboard
        $data = Dashboard::orderby('title', 'asc')->get();
        return view('dashboard.index')->with('data', $data);
    }


    public function create()
    {
        return view('dashboard.create');
    }


    public function store(Request $request)
    {
        // Session berguna sebagai ketika salah input valuenya masi ada
        Session::flash('title', $request->title);
        Session::flash('content', $request->content);
        // End Session
        $request->validate(
            [
                'title' => 'required',
                'content' => 'required'
            ],
            [
                'title.required' => 'Judul Wajib Diisi',
                'content.required' => 'Content Wajib Diisi'
            ]
        );

        // Memasukan Data
        $data = [
            // 1. title yang pertama adalah table di database
            // 2. title yang kedua adalah name di bagian blade.php atau htmlnya
            'title' => $request->title,
            'content' => $request->content
        ];
        // Dashboard menagmbil dari model Dashboard
        Dashboard::create($data);

        return redirect()->route('halaman.index')->with('success', 'Berhasil Menambah Data');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // Menampilkan Data
        $data = Dashboard::where('id', $id)->first();
        return view('dashboard.edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {

        // End Session
        $request->validate(
            [
                'title' => 'required',
                'content' => 'required'
            ],
            [
                'title.required' => 'Judul Wajib Diisi',
                'content.required' => 'Content Wajib Diisi'
            ]
        );

        // Memasukan Data
        $data = [
            // 1. title yang pertama adalah table di database
            // 2. title yang kedua adalah name di bagian blade.php atau htmlnya
            'title' => $request->title,
            'content' => $request->content
        ];
        // Untuk Update cara pemanggilannya seperti Berikut
        Dashboard::where('id', $id)->update($data);

        return redirect()->route('halaman.index')->with('success', 'Berhasil Edit Data');
    }

    public function destroy(string $id)
    {
        Dashboard::where('id', $id)->delete();
        return redirect()->route('halaman.index')->with('success', 'Berhasil Hapus Data');
    }
}
