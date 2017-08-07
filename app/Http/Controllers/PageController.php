<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Sector;
use App\Models\Cases as CaseStudies;
use App\Models\UserContact;
use Session;
use DB;
use Auth;
class PageController extends Controller
{
    //
    public function show_industries()
    {
        $sectors=DB::table('page')->where('category',"sector")->whereNull('deleted_at')->get();
    	return view('pages.industries')
        ->with('sectors',$sectors)
        ;
    }
    public function download_pdf($case_id)
    {
        $pdf=CaseStudies::find($case_id);
        if (!is_null($pdf)) {
            $pdf=$pdf->pdf;
            // dump($pdf);
            $path=public_path('page_images/'.$pdf);
            // dump($path);
            return response()->download($path);
        }
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


    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function show_cases($id="")
    {
    	if ($id=="") {
            $cases=CaseStudies::orderBy('created_at','DESC')->limit(6)->get();
    		return view('pages.all_cases')
            ->with('case',$cases);
            
    	}
    	else{

    		$case=CaseStudies::where('custom_url',$id)->first();
    		return view('pages.single_case')
    		->with('case',$case);
    	}
    }

    public function show_privacy()
    {
        return view("pages.privacy");
    }

    public function show_work()
    {
        return view('pages.work');
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
            $page=Page::where('custom_url',$id)->first();
            $services=Page::where('category','service')->where('id','!=',$id)->get();
            return view('pages.service')
            ->with('page',$page)
            ->with('services',$services)

            ;
        }
    }

    public function show_sector($id="")
    {
        if ($id=="") {
            $sectors=Page::where('category','sector')->get();
            return view('pages.industries')
            ->with('sectors',$sectors)
            ;
        }else{
            $page=Page::where('custom_url',$id)->first();
            $services=Page::where('category','sector')->where('custom_url','!=',$id)->get();
            return view('pages.service')
            ->with('page',$page)
            ->with('services',$services)

            ;
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
            $blog=Blog::where('custom_url',$id)->first();
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
            $femail=DB::table('global')->pluck('forwarding_email');
            // dump($femail);
            $e=new EmailController;

            // return $e->forward_email($r,$femail);
            Session::flash('flash_message','Your message has been sent. Thank you for contacting');
        } catch (\Exception $e) {
            // dump($e);
        }
        
        // return redirect()->back();
    }
}
