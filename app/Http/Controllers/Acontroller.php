<?php

namespace App\Http\Controllers;
use DB;
use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Acontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $user->password=Hash::make($request->password);
        #$user->group_id='0'; by default
        $user->save();
        return back();
    }

    public function showusers(request $request)
    {
 
        $users=DB::table('users')->get();         
        return view('showusers',compact('users'));
    }

}
