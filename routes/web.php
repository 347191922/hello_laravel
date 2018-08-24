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
    return view('welcome');
});
Route::get('index','IndexController@app');
//Route::get('helo',function (){
//   return redirect('index','');// 重定向到index路由 访问index控制器index方法
//});
//Route::get('blade',function (){
//   return view('layouts/child');
//});
Route::get('post/create','PostController@create');
Route::post('post','PostController@store');
Route::any('test1','StudentsController@test1');