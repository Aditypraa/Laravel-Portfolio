<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Metadata;
use Illuminate\Http\Request;

class SettingDashboardController extends Controller
{
    function index()
    {
        $dataDashboard = Dashboard::orderBy('title', 'asc')->get();
        return view('behind.settingDashboard.index')->with('dataDashboard', $dataDashboard);
    }

    function update(Request $request)
    {
        Metadata::updateOrCreate(['meta_key' => 'about'], ['meta_value' => $request->about]);
        Metadata::updateOrCreate(['meta_key' => 'interest'], ['meta_value' => $request->interest]);
        Metadata::updateOrCreate(['meta_key' => 'award'], ['meta_value' => $request->award]);

        return redirect()->route('settingDashboard.index')->with('success', 'Berhasil Update Data Setting Dashboard');
    }
}
