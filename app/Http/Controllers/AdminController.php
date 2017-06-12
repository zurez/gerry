<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\User;
use App\Http\Requests;
use Auth;
use DB;
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
        $blog=Blog::leftJoin('users','blog.user_id','=','users.id')->select('blog.id as bid','blog.title as title','users.display_name')->get();
        
    	return view('dashboard.blog_all')
            ->with('page_title','All Blogs')
            ->with('blogs',$blog)
        ;
    }
    public function new_blog($action,$id="")
    {
    	if ($action =="new" and $id=="") {
    		return view('dashboard.blog_new')
                ->with('page_title','New Blog')
            ;
    	}
        elseif ($action =="all") {
            return $this->get_blog();
        }
        else{
    		$blog=Blog::find($id);
    		return view('dashboard.blog_new')
            ->with('page_title','Edit Blog')
    		->with('content',$blog->content)
    		->with('title',$blog->title)
            ->with('blog_id',$blog->id)
    		;
    	}
    }

    public function action_blog(Request $r)
    {
        $ret["long_message"]="Your action couldn't be completed";
        try {
           $b=Blog::find($r->blog_id);
           switch ($r->action) {
               case 'unpublish':
                   $b->published=0;
                    $b->save();
                   break;
               case 'publish':
                   $b->published=1;
                    $b->save();
                   break;

               default:
                   # code...
                   break;
           
          
           }
           if ($r->action=="delete") {
                Blog::destroy($r->blog_id);
            }

           $ret["long_message"]="The blog has been updated";
        } catch (\Exception $e) {
            dump($e->getMessage());
        }
        return response()->json($ret);
    }

    public function save_blog(Request $r)
    {

    	$ret=array();
    	$ret['status']="failure";
        $ret['long_message']="Your blog could not be saved";
    	try {
	    	$content=$r->content;
    		$title=$r->title;
            $published=$r->published;
            $file = $r->file('imagefile');
            $filename=str_random(10).".png";
            $filepath=public_path('blog_images');
            $file->move($filepath,$filename);
            if ($r->has('blog_id')) {
                $blog=Blog::find($r->blog_id);
            }else{ $blog= new Blog;}
           
            $blog->content=$content;
            $blog->title=$title;
            $blog->published=$published;
            $blog->imagefilepath=$filename;
            $blog->description=$r->description;
            $blog->user_id=Auth::user()->id;
            $blog->save();
            $ret["status"]="success";
            $ret['long_message']="Your blog was saved";
    	} catch (\Exception $e) {
    		// return $e->getMessage();
    	}

    	return response()->json($ret);
    }

    public function get_login(Request $r)
    {
        
    }
}

