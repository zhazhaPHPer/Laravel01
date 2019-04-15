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
Route::get('index', 'IndexController@index')->name('index');
//需要控制器命名空间
Route::group(['namespace' => 'Index'], function () {
    Route::any('index', 'HomeController@index')->name('home');
    Route::any('cate', 'HomeController@cate')->name('cate');

});
//第一天作业
Route::group(['namespace' => 'Login'],function (){
    Route::get('login/index', 'LoginController@index')->name('login/index');
    Route::post('login/login', 'LoginController@login')->name('login/login');
});

Route::group(['namespace' => 'Article'],function(){
    Route::get('article/article', 'ArticleController@index')->name('article/article');
    Route::get('article/list', 'ArticleController@list')->name('article/list');
});
