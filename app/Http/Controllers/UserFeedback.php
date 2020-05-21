<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;

class UserFeedback extends Controller
{
    //
    
    public function feedback(Request $request)
    {
    	$feedback                = new feedback();
    	$feedback->id            = $request->input('id');
  	 	$feedback->comment       = $request->input('Comment');
  	 	$feedback->user_email    = $request->input('email');
        $feedback->save();
        return redirect('/home')->with('sucess','Thank You For Your Feedback');
    	}
    	
}
