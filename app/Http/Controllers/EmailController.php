<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
class EmailController extends Controller
{
    public function index()
    {
    	return view('admin.email');
    }

    public function send_mail(Request $r)
    {
    	try {
    		$file=fopen($r->csv,"r");
    		// dump($file);
    		$body=$r->body;
    		$subject=$r->subject;
    		$cooked_emails=[];
    		while(!feof($file))
			  {
			  $email=fgetcsv($file);
			  
			  if (!is_null($email)) {
			  	Mail::send('layout.email',['body'=>$body],function($message) use($email,$subject){
	    		$message->to($email[0])->subject($subject);
	    			});
			  }
			  
			 
			  }
    		
	    	
	    	
    	} catch (\Exception $e) {
    		// dump($e);
    	}
    	echo "Mail Sent. Redirecting you back.";
    	return redirect()->back();
    }
    
    public function forward_email($content,$email)
    {
        $body="You have an email from ".$content->name."<br><b>Mail Content</b><br>".$content->message;
        $subject="You have a new mail on the website.";
        Mail::send('layout.email',['body'=>$body],function($message) use($email,$subject){
                $message->to($email)->subject($subject);
                    });
    }
}

