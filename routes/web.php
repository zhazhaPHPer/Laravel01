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

//Controllers根目录下
Route::get('index','IndexController@index')->name('index');
//需要控制器命名空间
Route::group(['namespace' => 'Index'],function(){
Route::any('index','HomeController@index')->name('home');
Route::any('cate','HomeController@cate')->name('cate');

});
Route::get('login/index','Login\LoginController@index');
Route::post('login/login','Login\LoginController@login');

Route::get('article/article','Article\ArticleController@index');
Route::get('article/list','Article\ArticleController@list');