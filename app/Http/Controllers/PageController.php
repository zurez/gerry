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
        $news=Blog::join('users','users.id','=','blog.user_id')->orderBy('blog.created_at','DESC')->where('blog.published','!=','0')->whereNull('blog.deleted_at')->limit(3)
        ->select('blog.title','blog.id','blog.description','users.display_name','blog.content','blog.created_at')
        ->get();
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
            $blog=Blog::find($id);
            return view('pages.blog')
            ->with('content',$blog->content)
            ;
        }
    }
}
