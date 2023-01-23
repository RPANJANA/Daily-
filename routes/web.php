<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\usercontroller;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/contact', function () {
    return view('Contact');
});

//url,page
Route::get('/{name}', function ($name) {
    echo $name;
  return view('user',['name'=>$name]);
});
//controller
Route::get("usercon",[usercontroller::class,'getData']);
Route::get("page/{user}",[Pagecontroller::class,'index']); 