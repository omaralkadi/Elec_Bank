<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\feedback;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userfeedback extends Controller
{
    public function show()
    {

        $user = auth()->user();
        return view('userfeedback',compact('user'));
    }
  
    public function addfeedback(Request $request)
    {
      $feedback                = new feedback;
      $feedback->id            = $request->id;
      $feedback->comment       = $request->Comment;
      $feedback->user_email    = $request->email;
      $feedback->save();
      return redirect('/home')->with('sucess','Thank You For Your Feedback');
    }
  
    public function get_feedback(request $request)
    {
    if (!Auth::guest() && Auth::user()->group_id ==1)
    {
    $feedback=DB::table('feedback')->get();
    return view('feedback',compact('feedback'));
     }
     else
     return redirect('home');
     }
    
    public static function deleteFeedback($id){
  
      DB::table('feedback')->where('id', '=', $id)->delete();
      return back();
    }
}
