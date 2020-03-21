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

Route::get('/updateuser', function () {
    if (!Auth::guest() && Auth::user()->group_id ==1)
        return view('updateuser');
    else
    {
        return redirect("home");
    }

    });

Route::get('/submit', function ($id) {
    if (!Auth::guest() && Auth::user()->group_id ==1)
        return view('updateuser');
    else
    {
        return redirect("home");
    }

});

Route::get('submit/{id}','UpdateData@update');
Route::post('submit','UpdateData@update');

Route::get('adduserform','Acontroller@show');

Route::post('adduser','Acontroller@add');

Route::get('showusers','Acontroller@showusers');
Route::get('/deleteUser/{id}','Acontroller@deleteUser');

Auth::routes(['register' =>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('feedback','Feedback@get_feedback');
