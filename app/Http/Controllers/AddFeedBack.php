<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\feedback;

class AddFeedBack extends Controller
{
    public function addfeedback(Request $request)
    {
      $feedback                = new feedback;
      $feedback->id            = $request->id;
      $feedback->comment       = $request->Comment;
      $feedback->user_email    = $request->email;
      $feedback->save();
      return redirect('/home')->with('sucess','Thank You For Your Feedback');
    }
  
}
