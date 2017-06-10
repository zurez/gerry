<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function show_industries()
    {
    	return view('pages.industries');
    }
    public function landing()
    {
    	return view('pages.landing');
    }

    public function show_cases($id="")
    {
    	if ($id=="") {
    		return view('pages.all_cases');
    	}
    	else{
    		// $case=Case::find($id);
    		// return view('pages.case')
    		// ->with('case',$case);
    	}
    }

    public function show_mission()
    {
    	return view('pages.mission');
    }
}
