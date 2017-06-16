<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Blog;
use App\Models\UserContact;
use Session;
use DB;

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
            $blogs=Blog::join('users','users.id','=','blog.user_id')->where('blog.published','!=','0')->orderBy('blog.created_at','DESC')->select('blog.*','users.display_name')->get();
            $older=Blog::join('users','users.id','=','blog.user_id')->where('blog.published','!=','0')->orderBy('blog.created_at','ASC')->select('blog.*','users.display_name')->get();

            return view('pages.all_blogs')
            ->with('blogs',$blogs)
            ->with('older',$older)
            ;
        }else{
            $blog=Blog::find($id);
            return view('pages.blog')
            ->with('blog',$blog)
            ;
        }
    }

    public function show_contact()
    {
        return view('pages.contact');
    }

    public function save_contact(Request $r)
    {
        try {
            $n= new UserContact;
            $n->name=$r->name;
            $n->phone=$r->phone;
            $n->email=$r->email;
            $n->message=$r->message;
            $n->save();
            Session::flash('flash_message','Your message has been sent. Thank you for contacting');
        } catch (\Exception $e) {
            
        }
        
        return redirect()->back();
    }
}
