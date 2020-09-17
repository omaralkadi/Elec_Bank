<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class TransactionController extends Controller
{
    public function ViewAllTransactions()
    {
      $transactions = DB::table("transaction")->get();
      return view("listTransactions",compact('transactions'));
    }
    public function DeleteTransaction($id)
    {
        DB::table("transaction")->where("id" , "=" , $id)->delete();
        #DB::table('transaction')->where('id' , '=', $id)->delete();
        return redirect("listTransactions");
    }

    public function transfer_show(request $request)
    {
     
        $user = auth()->user();
        return view('transfer',compact('user'));

    }


    public function transfermoney(Request $request){

      $user1= users::find($_POST['id']);
      $user2= users::find($_POST['id2']);

      $validation=$request->validate([

        'amount' =>'required|integer|min:0',
        'id2' =>'exists:users,id|different:id',
      ]
    );

      if($user1->money>=$request->amount)
      {
        DB::table('users')->where('id', '=', $request->id)->update(['users.money'=> $user1->money - $request->amount ]);
        DB::table('users')->where('id', '=', $request->id2)->update(['users.money'=> $user2->money + $request->amount ]);
        DB::table('transaction')->insert(
          array(
          'FromUserId' => $request->id,
            'ToUserId' =>  $request->id2,
            'Amount' => $request->amount,
            'created_at' =>\Carbon\Carbon::now(),
          )
        );
        return redirect()->back()->with('success', ' transferring done successfully');   
      }
      else{
        return redirect()->back()->with('faild', ' transferring can not done');
      }

    }

    public function balance_show(request $request)
      {
      $user = auth()->user();
      return view('balancee',compact('user'));
      }

      public function balance_get(Request $request){

      $user= users::find($_POST['id']);
      if($user)
      {
        $m=$user->money;
        return view('balance_value',compact('m'));
      }
      else
      {
        return redirect('/balance_show');

      }

       }
}
