<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{

    public $tipe = 'experience'; // Construktur darti column tipe dengan enum 'experience'

    // public function __construct()
    // {
    //     $this->tipe = 'experience';
    // }

    public function index()
    {
        // Menampilkan sesuai column tipe di type datanya
        // Misalkan menampilkan di halaman experience maka seperti ini : 'tipe','experience'
        // Jika Menampilkan di halaman education maka seperti ini : 'tipe','education'
        $data = History::where('tipe', 'experience')->orderBy('tanggal_akhir', 'desc')->get();
        return view('experience.index')->with('data', $data);
    }


    public function create()
    {
        return view('experience.create-experience');
    }


    public function store(Request $request)
    {

        // Session berguna sebagai ketika salah input valuenya masi ada
        Session::flash('title', $request->title);
        Session::flash('info1', $request->info1);
        Session::flash('tanggal_mulai', $request->tanggal_mulai);
        Session::flash('tanggal_akhir', $request->tanggal_akhir);
        Session::flash('content', $request->content);
        // End Session

        // Membuat Validasi untuk menambpilkan error
        $request->validate(
            [
                'title' => 'required',
                'info1' => 'required',
                'tanggal_mulai' => 'required',
                'content' => 'required'
            ],
            [
                'title.required' => 'Judul Wajib Diisi',
                'info1.required' => 'Nama Perusahaan Wajib Diisi',
                'tanggal_mulai.required' => 'Tanggal Mulai Wajib Diisi',
                'content.required' => 'Content Wajib Diisi'
            ]
        );

        // Memasukan Data Ke dalam Database
        $data = [
            // 1. title yang pertama adalah nama column table di database
            // 2. title yang kedua adalah name di bagian blade.php atau htmlnya
            'title' => $request->title,
            'info1' => $request->info1,
            /*
            Untuk Tipe di db adalah enum
            Maka kalau Dashboardnya experience maka yang dimasukan adalah experience
            */
            'tipe' => $this->tipe,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'content' => $request->content
        ];
        // History mengambil dari model History
        History::create($data);

        return redirect()->route('experience.index')->with('success', 'Berhasil Menambah Data Experience');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // Menampilkan Data berdasatkan tabel id dan tabel tipe dengan enum experience sesuai construktur di atas
        $data = History::where('id', $id)->where('tipe', $this->tipe)->first();
        return view('experience.edit-experience')->with('data', $data);
    }


    public function update(Request $request, string $id)
    {
        // End Session
        $request->validate(
            [
                'title' => 'required',
                'info1' => 'required',
                'tanggal_mulai' => 'required',
                'content' => 'required'
            ],

            // Menampilkan Pesan Jika tidak diisi
            [
                'title.required' => 'Judul Wajib Diisi',
                'info1.required' => 'Nama Perusahaan Wajib Diisi',
                'tanggal_mulai.required' => 'Tanggal Mulai Wajib Diisi',
                'content.required' => 'Content Wajib Diisi'
            ]
        );

        // Memasukan Data
        $data = [
            // 1. title yang pertama adalah nama column table di database
            // 2. title yang kedua adalah name di bagian blade.php atau htmlnya
            'title' => $request->title,
            'info1' => $request->info1,
            /*
            Untuk Tipe di db adalah enum
            Maka kalau Dashboardnya experience maka yang dimasukan adalah experience
            */
            'tipe' => $this->tipe,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'content' => $request->content
        ];
        // Untuk Update cara pemanggilannya seperti Berikut
        History::where('id', $id)->update($data);

        return redirect()->route('experience.index')->with('success', 'Berhasil Edit Data');
    }


    public function destroy(string $id)
    {
        History::where('id', $id)->where('tipe', $this->tipe)->delete();
        return redirect()->route('experience.index')->with('success', 'Berhasil menghapus Data');
    }
}
