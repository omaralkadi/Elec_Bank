<?php

namespace App\Http\Controllers;

use DB;
use App\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Feedback extends Controller
{
  public function get_feedback(request $request)
  {

      $feedback=DB::table('feedback')->get();
      return view('feedback',compact('feedback'));
  }

  public static function deleteFeedback($id){

    DB::table('feedback')->where('id', '=', $id)->delete();
    return back();
  }

}
