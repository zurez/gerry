<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\NewsLetter;
class NewsLetterController extends Controller
{
    
    public function email_validator($email)
    {
    	# code...
    }

    public function add(Request $r)
    {
    	
    	if (!empty($r->email) and filter_var($r->email, FILTER_VALIDATE_EMAIL)) {
    		/*Check in DB*/
    		$f= NewsLetter::where('email')->where('status','active')->first();
    		if (empty($f)) {
    		 	$n = new NewsLetter;
	    		$n->email=$r->email;
	    		$n->status="active";
	    		$n->save();
	    		$message="Your email has been succesfully added to our mailing list";

    		 }else{
    		 	$message="Your email has already been added to our mailing list";
    		 }
    		
    		
    	}else{
    		$message="There was some problem adding your email. Please make sure your email is valid.";
    	}
    	return view('pages.newsletter')
    		->with('message',$message)
    		;
    	
    }
    public function unsubscribe($email)
    {
    	NewsLetter::where('email')->where('status','active')->update([
    		'status'=>'pending'
    		]);
    	$message="You have been unsubscribed from our mailing list.";
    	return view('pages.newsletter')
    		->with('message',$message)
    		;

    }
  
}
