<?php
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::GET('updateuser', function () {
    if (!Auth::guest() && Auth::user()->group_id ==1)
        return view('updateuser');
    else
    {
        return redirect("home");
    }

    });
Route::post('updatebut','UpdateData@update');

Route::get('userfeedback', function(){
    return View('userfeedback');
});

Route::post('userfeed','UserFeedback@feedback');

Route::get('adduserform','Acontroller@show');

Route::post('adduser','Acontroller@add');

Route::get('showusers','Acontroller@showusers');
Route::get('/deleteUser/{id}','Acontroller@deleteUser');

Route::get('feedback','Feedback@get_feedback');
Route::get('/deleteFeedback/{id}','Feedback@deleteFeedback');

Auth::routes(['register' =>false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/BanUser/{id}','Acontroller@BanUser');

Route::get('/UnBanUser/{id}','Acontroller@UnBanUser');

Route::post('transfer','Acontroller@transfermoney');
Route::get('transfer_show','Acontroller@transfer_show');

Route::get("listTransactions",'TransactionController@ViewAllTransactions');
Route::get("listTransactions/{id}/Delete","TransactionController@DeleteTransaction");

Route::get("Site","T_Sites@AddTrustedSite");
Route::post("Site","T_Sites@StoreTrustedSite");

Route::get("Site/{id}/remove","T_Sites@removeSite");
Route::get("Site/{id}/edite","T_Sites@EditeSite");
Route::post("Site/{id}/edite","T_Sites@EditeSiteStore");

Route::get('Check_sites', function(){
     return View('check_web');
});
Route::post("Check_sites","T_Sites@search_web");
Route::get('balance_show','Acontroller@balance_show');
Route::post('balancee','Acontroller@balance_get');
