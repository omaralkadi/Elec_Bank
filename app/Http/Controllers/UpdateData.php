<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;

class UpdateData extends Controller
{
    //
    
    public function update(Request $request)
    {
    	$user           = users::find($_POST['id']);
    	$user->fname    = $request->input('fname');
  	 	$user->lname    = $request->input('lname');
  	 	$user->username = $request->input('uname');
        $user->password = $request->input('pass');
        $user->email    = $request->input('email');
        $user->update();
		//echo '<script type="text/javascript">alert("Changes saved")</script>';
        return redirect('/updateuser')->with('sucess','User Info Updated');
    	}
    	
}
