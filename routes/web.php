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


Route::get('adduserform','Acontroller@show');

Route::post('adduser','Acontroller@add');

Route::get('showusers','Acontroller@showusers');
Route::get('/deleteUser/{id}','Acontroller@deleteUser');

Route::get('feedback','Feedback@get_feedback');

Auth::routes(['register' =>false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/BanUser/{id}','Acontroller@BanUser');

Route::get('/UnBanUser/{id}','Acontroller@UnBanUser');

