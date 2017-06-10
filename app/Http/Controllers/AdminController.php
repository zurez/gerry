<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\User;
use App\Http\Requests;
use Auth;
class AdminController extends Controller
{
    public function index()
    {
    	return view('layout.admin');
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
    public function get_blog()
    {
    	Auth::login(User::find(1));
        $blog=Blog::all();

    	return view('admin.blog')
            ->with('blogs',$blog)
        ;
    }
    public function new_blog($action,$id="")
    {
    	if ($action =="new" and $id=="") {
    		return view('admin.blog_new');
    	}else{
    		$blog=Blog::find($id);
    		return view('admin.blog_new')
    		->with('content',$blog->content)
    		->with('title',$blog->title)
            ->with('blog_id',$blog->id)
    		;
    	}
    }
    public function save_blog(Request $r)
    {
    	$ret=array();
    	$ret['status']="failure";

    	try {
	    	$content=$r->content;
    		$title=$r->title;
            if ($r->has('blog_id')) {
                $blog=Blog::find($r->blog_id);
            }else{ $blog= new Blog;}
           
            $blog->content=$content;
            $blog->title=$title;
            $blog->user_id=Auth::user()->id;
            $blog->save();
            $ret["status"]="success";
    	} catch (\Exception $e) {
    		
    	}

    	return response()->json($ret);
    }
}

