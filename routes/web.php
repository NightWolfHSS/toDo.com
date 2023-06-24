<?php

use Illuminate\Support\Facades\Route;

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

/*index.page*/
Route::get('/', 'MainController@index');
Route::get('/singin', 'MainController@singin');
Route::get('/about', 'MainController@about');
Route::get('/sec', 'MainController@politic');


/*test page*/
Route::get('/test', 'MainController@test');

/*market ...*/

/*for admin login*/
/*for users login*/

/* cheack panel only admin*/


