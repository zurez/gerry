<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use App\User;
use App\Http\Requests;
use Auth;
use DB;
class AdminController extends Controller
{
    public function index()
    {
    	return view('layout.admin')
        ->with('page_title','Dashboard')
        ;
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

            if ($r->has('blog_id')) {
                $blog=Blog::find($r->blog_id);
            }else{ $blog= new Blog;}
            try {
                if (!is_null($file)) {
                    # code...
                $file = $r->file('imagefile');
                $filename=str_random(10).".png";
                $filepath=public_path('blog_images');

                $file->move($filepath,$filename);
                $blog->imagefilepath=$filename;
                }

            } catch (\Exception $e) {
                
            }
            $blog->content=$content;
            $blog->title=$title;
            $blog->published=$published;
            
            $blog->description=$r->description;
            $blog->user_id=Auth::user()->id;
            $blog->save();
            $ret["status"]="success";
            $ret['long_message']="Your blog was saved";
    	} catch (\Exception $e) {
    		return $e->getMessage();
    	}

    	return response()->json($ret);
    }

    public function get_login(Request $r)
    {
        
    }

    public function new_service($action,$id="")
    {
        if ($action=="new" and $id=="") {
            return view('dashboard.service_new')
            ->with('page_title','New Service')
            ;
        }else{
            $service=Service::find($id);
            if (!is_null($service)) {
            return view('dashboard.service_new')
            ->with('page_title','Edit Service')
            ->with('service',$service)
            ;
            }
        }
    }

    public function save_service(Request $r)
    {

        $ret=array();
        $ret['status']="failure";
        $ret['long_message']="Your blog could not be saved";
        try {
           
            $title=$r->title;
       
            $column1=$r->column1;
            $column2=$r->column2;
            $footer1=$r->footer1;
            $footer2=$r->footer2;

    

            if ($r->has('service_id')) {
                $service=Service::find($r->service_id);
            }else{ $service= new Service;}
            try {
                if (!is_null($file)) {
                    # code...
                $file = $r->file('imagefile');
                $filename=str_random(10).".png";
                $filepath=public_path('service_images');

                $file->move($filepath,$filename);
                $service->logo=$filename;
                }

            } catch (\Exception $e) {
                
            }
            $service->column1=$column1;
            $service->title=$title;
            $service->column2=$column2;
            $service->foot1=$footer1;
            $service->foot2=$footer2;
            $service->user_id=Auth::user()->id;
            $service->save();
            $ret["status"]="success";
            $ret['long_message']="Your service was saved";
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return response()->json($ret);
    }
}

