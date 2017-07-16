<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Globals;
use App\User;
use App\Http\Requests;
use Auth;
use DB;
class AdminController extends Controller
{
    public function index()
    {
        $user_id=Auth::user()->id;
        $global=DB::table('global')->first();
        // $form_data2=DB::table('users')->leftJoin('userdetails','userdetails.user_id','=','users.id')->where('users.id',$user_id);
           	return view('dashboard.settings')
        ->with('page_title','Settings')
        ->with('form_data',$global)
        ;
    }

    public function show_profile_settings()
    {
        $user_id=Auth::user()->id;
        $data=User::leftJoin('userdetails as ud','ud.user_id','=','users.id')
            ->where('users.id',$user_id)->first()->toArray();
        return view('dashboard.profile_setting')
        ->with('page_title','Profile')
        ->with('form_data',$data)
        ;
    }

    public function save_profile_settings(Request $r)
    {
        try {
            $user=User::find(Auth::user()->id);
            $user->name=$r->name;
            $user->display_name=$r->display_name;
            $user->email=$r->email;
            $user->save();
            $file=$r->file('display_pic');
            $uarray= [
                'facebook'=>$r->facebook,
                'twitter'=>$r->twitter,
                'linkedin'=>$r->linkedin

                ];
            if (!is_null($file)) {
                    # code...

                $filename=str_random(10).".png";
                $filepath=public_path('page_images');

                $file->move($filepath,$filename);
                $uarray['display_pic']=$filename;
                
            }
            /*Check if userdetails exists otherwise create*/
            $ud=DB::table('userdetails')->where('user_id',$user->id)->first();
            if (!is_null($ud)) {
                 # code...
                DB::table('userdetails')->where('user_id',$user->id)
            ->update($uarray);
             } else{
                $uarray['user_id']=$user->id;
                DB::table('userdetails')
            ->insert($uarray);
             }
            
        } catch (\Exception $e) {
            dump($e);
        }
        return redirect()->back();
    }
    public function save_page_settings(Request $request)
    {
        // dd($request);

        try {
            $g=Globals::find('1');
            
            $g->facebook=$request->facebook;
            $g->twitter=$request->twitter;
            $g->phone=$request->phone;
            $g->linkedin=$request->linkedin;
            $g->email=$request->email;
            /*Image Handling*/
            $file=$request->file('landing_image');

            if (!is_null($file)) {
                    # code...

                $filename=str_random(10).".png";
                $filepath=public_path('page_images');

                $file->move($filepath,$filename);
                $g->landing_image=$filename;
            }
            $g->save();
        } catch (\Exception $e) {
            dump($e);
        }
        return redirect()->back();
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
    public function get_blog()
    {
    	// Auth::login(User::find(1));
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
                dump($e);
            }
            $blog->content=$content;
            $blog->title=$title;
            $blog->published=1;
            
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
            $page=Page::find($id);
            if (!is_null($page)) {
            return view('dashboard.service_new')
            ->with('page_title','Edit Service')
            ->with('service_id',$id)
            ->with('service',$page)
            ;
            }
        }
    }
    public function edit_page($id)
    {
        $page=Page::find($id);
        return view('dashboard.page_new')
        ->with('page',$page)
        ->with('page_id',$id)
        ->with('category',$page->category)
        ->with('page_title','Edit '.ucfirst($page->category))
        ;
    }
    public function save_page(Request $r)
    {

        $ret=array();
        $ret['status']="failure";
        $ret['long_message']="Your blog could not be saved";
        try {
           
            $title=$r->title;
       
            $short_desc=$r->short_desc;
            $long_desc=$r->long_desc;
            $category=$r->category;
            // $footer2=$r->footer2;

            $file = $r->file('logo');

            if ($r->has('page_id')) {
                $page=Page::find($r->page_id);
            }else{ $page= new Page;}
            try {
                if (!is_null($file)) {
                    # code...

                $file = $r->file('logo');
                $filename=str_random(10).".png";
                $filepath=public_path('page_images');

                $file->move($filepath,$filename);
                $page->logo=$filename;
                }

            } catch (\Exception $e) {
                dump($e);
            }
            $page->short_desc=$short_desc;
            $page->title=$title;
            $page->long_desc=$long_desc;
            $page->category=$category;
            // $page->foot2=$footer2;
            $page->user_id=Auth::user()->id;
            $page->deleted_at=Null;
            $page->save();
            $ret["status"]="success";
            $ret['long_message']="Your service was saved";
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return response()->json($ret);
    }

    public function show_save_page($category)
    {
        return view('dashboard.page_new')
        ->with('page_title','New '.ucfirst($category))
        ->with('category',$category);
    }

    public function show_page_all($category)
    {
        $page=Page::leftJoin('users','page.user_id','=','users.id')->select('page.id as bid','page.title as title','users.display_name')->get();
        return view('dashboard.page_all')
        ->with('page_title','All '.ucfirst($category))
        ->with('pages',$page)
        ;
    }

    public function email($type)
    {
        $emails=array();
        switch ($type) {
            case 'inbound':
                $emails=DB::table('usercontact')->orderBy('created_at','Desc')->get();
                break;
            case 'outbound':
                return view('dashboard.sendmail')

        ->with('page_title',ucfirst($type)."Send Email")
        ;
                break;

            default:
                # code...
                break;
        }
        return view('dashboard.emails')
        ->with('emails',$emails)
        ->with('page_title',ucfirst($type)." Emails")
        ;
    }
}

