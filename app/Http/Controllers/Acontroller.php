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
      if (!Auth::guest() && Auth::user()->group_id ==1)
      {
        return view('adduserform');
      }
      else
      return redirect('home');

    }


    public function add(Request $request)
    {
         $validation=$request->validate([
          'firstname'=> 'required',
          'lastname'=>'required',
          'password'=>'required',
          'username'=>'required',
          'email'=>'required'
        ]);

        $user=new users;
        $user->fname=$request->firstname;
        $user->lname=$request->lastname;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        #$user->group_id='0'; by default
        $user->save();
        return redirect('/showusers');
    }

    public function showusers(request $request)
    {
        if (!Auth::guest() && Auth::user()->group_id ==1)
      {
        $users=DB::table('users')->get();
        return view('showusers',compact('users'));
      }
      else
      return redirect('home');
    }

    public static function deleteUser($id){

        DB::table('users')->where('id', '=', $id)->delete();
        return back();
      }

    public static function BanUser($id){

        DB::table('users')->where('id', '=', $id)->update(['users.isBan'=> '1']);
        return back();
      }

      public static function UnBanUser($id){

        DB::table('users')->where('id', '=', $id)->update(['users.isBan'=> '0']);
        return back();
      }


    

      public function transfermoney(Request $request){

        $user1= users::find($_POST['id']);
        $user2= users::find($_POST['id2']);

        if($user1->money>=$request->amount)
        {
          DB::table('users')->where('id', '=', $request->id)->update(['users.money'=> $user1->money - $request->amount ]);
          DB::table('users')->where('id', '=', $request->id2)->update(['users.money'=> $user2->money + $request->amount ]);
          return back();
        }
        else{
          echo '<script type="text/javascript">alert("can not transfer")</script>';
          return back;

        }


      }



}
