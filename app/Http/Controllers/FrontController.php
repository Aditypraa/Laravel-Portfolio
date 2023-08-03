<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\History;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        //About
        $about_id = get_meta_value('about');
        $about_data = Dashboard::where('id', $about_id)->first();

        //Interest
        $interest_id = get_meta_value('interest');
        $interest_data = Dashboard::where('id', $interest_id)->first();

        //award
        $award_id = get_meta_value('award');
        $award_data = Dashboard::where('id', $award_id)->first();

        //Experience
        $experience_data = History::where('tipe', 'experience')->get();

        //Eduaction
        $education_data = History::where('tipe', 'education')->get();


        return view('front.index')->with(
            [
                'about' => $about_data,
                'interest' => $interest_data,
                'award' => $award_data,
                'experience' => $experience_data,
                'education' => $education_data,
            ]
        );
    }
}
