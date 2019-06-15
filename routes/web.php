<?php

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
    return view('index');
});


Route::get('/add_user',"userController@index");
Route::get('/del',"userController@del");
Route::any('/do_add',"userController@do_add");
Route::any('/list',"userController@list");
Route::any('/update',"userController@update");
Route::any('/do_update',"userController@do_update");


Route::middleware(['User'])->group(function(){
    Route::any('login/register',"Login@register");
    Route::any('login/do_register',"Login@do_register");
});
Route::any('login/index',"Login@index");
Route::any('login/login',"Login@login");

Route::get('/add_goods','Admin\goodsController@add_goods');
Route::any('/do_add_goods','Admin\goodsController@do_add_goods');





