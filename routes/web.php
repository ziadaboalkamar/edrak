<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\EdrakMainController;
// use App\Http\Controllers\MoamenAlewaController;
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


/*
get fetch data (read)

post send request (store , update , delete)

put/patch send request where request in database (update)


delete to delete the request from database (delete)

option  to get data from database and read (read)


we see all when use resource controller

resouce we are group of all type


*/


Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome', 'welcome');

// Route::get('/product',"Front/EdrakMainController@index");


/*
prefix give name to urls 

middleware its a if statment

name 

namespace direction of controller




*/
Route::group(['prefix' =>'admin','name'=>"admin."], function () {
Route::get('/mohammed',[EdrakMainController::class,"index"])->name("admij");//admij    admin.admij
Route::get('/ahmed',[EdrakMainController::class,"index"])->name("moamen");  // admin.moamen
Route::get('/hussein',[EdrakMainController::class,"index"]);

});
