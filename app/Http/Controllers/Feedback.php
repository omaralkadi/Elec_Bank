<?php

namespace App\Http\Controllers;

use DB;
use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class Feedback extends Controller
{

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
