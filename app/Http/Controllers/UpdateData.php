<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;


class UpdateData extends Controller
{
    //
    public function UpdateData()
    {
    	return view ('updateuser');
    }
    public function update(Request $request)
    {
    	$user = new users;
    	$user->id       = $request->id;
    	$user->fname    = $request->fname;
  	 	$user->lname    = $request->lname;
  	 	$user->username = $request->username;
        $user->password = $request->password;
        $user->email    = $request->email;
        $user->update();
		echo '<script type="text/javascript">alert("Changes saved")</script>';
        return view('updateuser',compact('user'));
    	}
    	
}
