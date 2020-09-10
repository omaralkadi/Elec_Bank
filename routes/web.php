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


Route::get("UpdateUser/{id}/edite","Usercontroller@UpdateUserView");

Route::post("UpdateUser/{id}/edite","Usercontroller@UpdateUser");

Route::get('userfeedback','userfeedback@show');
Route::post('userfeed','userfeedback@addfeedback');

Route::get('adduserform','Usercontroller@show');
Route::post('adduser','Usercontroller@add');

Route::get('showusers','Usercontroller@showusers');
Route::get('/deleteUser/{id}','Usercontroller@deleteUser');

Route::get('feedback','userfeedback@get_feedback');
Route::get('/deleteFeedback/{id}','userfeedback@deleteFeedback');

Auth::routes(['register' =>false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/BanUser/{id}','Usercontroller@BanUser');
Route::get('/UnBanUser/{id}','Usercontroller@UnBanUser');

Route::post('transfer','TransactionController@transfermoney');
Route::get('transfer_show','TransactionController@transfer_show');

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
Route::get('balance_show','TransactionController@balance_show');
Route::post('balancee','TransactionController@balance_get');
