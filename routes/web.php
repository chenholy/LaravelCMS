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

Route::group(['middleware'=>['web']],function(){
  Route::get('/', function () {
      return view('welcome');
  });

Route::any('admin/login', 'Admin\LoginController@login');
});

// Route::any('admin/crypt','Admin\LoginController@crypt');


Route::group(['middleware'=>['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'],function(){



  Route::any('index','IndexController@index');
  Route::any('pass','IndexController@pass');
  Route::any('quit','IndexController@quit');
  Route::resource('article','ArticleController');
  Route::resource('category','CategoryController');
  Route::any('deleteA/{id}','DeleteController@deleteA');
  Route::any('deleteC/{id}','DeleteController@deleteC');
  Route::post('checkbox','DeleteController@checkbox');
  Route::any('return','DeleteController@cancel');



});
