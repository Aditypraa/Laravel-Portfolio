<?php

namespace App\Http\Controllers;

use App\Models\Metadata;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skill_url = public_path('assets/devicon.json');
        $skill_data = file_get_contents($skill_url);
        $skill_data = json_decode($skill_data, true);
        $skill = array_column($skill_data, 'name');
        $skill = "'" . implode("','", $skill) . "'";

        return view('behind.skill.index')->with(['skill' => $skill]);
    }

    public function update(Request $request)
    {
        //if untuk memastikan bahwa yang dijalankan method post
        if ($request->method() == 'POST') {

            // Validasi data
            $request->validate(
                [
                    'language' => 'required',
                    'workflow' => 'required',
                ],

                // Untuk Menampilkan pesannya jika Tidak Diisi
                [
                    'language.required' => 'Silakan Masukan Bahasa Pemrograman',
                    'workflow.required' => 'Silakan Masukan Workflow'
                ]
            );

            // Untuk Membuat Update misalkan ada dan Method Create Jika Belum Ada
            // kita Bisa menggunakan  fungsi updateOrCreate
            //* Meta key adalah penanda
            //* Meta Value adalah isian User
            Metadata::updateOrCreate(["meta_key" => 'language'], ['meta_value' => $request->language]);
            Metadata::updateOrCreate(['meta_key' => 'workflow'], ['meta_value' => $request->workflow]);

            return redirect()->route('skill.index')->with('success', 'Berhasil Update Data Skill');
        }
    }
}
