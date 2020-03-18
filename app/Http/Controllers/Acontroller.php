<?php

namespace App\Http\Controllers;
use DB;
use App\users;
use Illuminate\Http\Request;

class Acontroller extends Controller
{

    public function show()
    {
        
        return view('adduserform');
    }

    public function add(Request $request)
    {
        $user=new users;
        $user->fname=$request->firstname;
        $user->lname=$request->lastname;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        #$user->group_id='0'; by default
        $user->save();
        return back();
    }
}
