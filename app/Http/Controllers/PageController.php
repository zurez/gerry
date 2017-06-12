<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Blog;
class PageController extends Controller
{
    //
    public function show_industries()
    {
    	return view('pages.industries');
    }
    public function landing()
    {
        $news=Blog::orderBy('created_at','DESC')->where('published','!=','0')->whereNull('deleted_at')->limit(3)->get();
    	return view('pages.landing')
        ->with('news',$news)
        ;
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

    public function show_team()
    {
    	# code...
    	return view('pages.team');
    }

    public function show_service($id="")
    {
        if ($id=="") {
            return view('pages.all_services');
        }else{
            return view('pages.service');
        }
    }

    public function show_blog($id="")
    {
        if ($id=="") {
            return view('pages.all_blogs');
        }else{
            return view('pages.blog');
        }
    }
}
