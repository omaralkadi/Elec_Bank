<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
}
