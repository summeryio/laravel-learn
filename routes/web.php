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
Route::get('/view', function () { // 多个路由调用一个模版
    return view('welcome');
});



Route::get('student/index', ['uses' => 'StudentController@index']);
Route::get('student/create', ['uses' => 'StudentController@create']);
Route::post('student/save', ['uses' => 'StudentController@save']);
