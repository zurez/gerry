<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mailgun;
class EmailController extends Controller
{
    public function index()
    {
    	return view('admin.email');
    }

    public function send_mail(Request $r)
    {
    	try {
	    	$emails=explode(',',$r->emails);
	    	$cooked_emails=[];
	    	foreach ($emails as $email {
	    		$cooked_emails[$email]=array();
	    	}
	    	$subject=$r->subject;
	    	$content=[
	    		'content'=>$r->content
	    	];
	    	Mailgun::send('layout.email',$content,function($message){
	    		$message->to($cooked_emails);
	    	});
    	} catch (\Exception $e) {
    		
    	}
    }
    
}

