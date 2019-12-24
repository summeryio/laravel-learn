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




Route::get('orm1', ['uses' => 'StudentController@orm1']);
Route::get('orm2', ['uses' => 'StudentController@orm2']);
Route::get('orm3', ['uses' => 'StudentController@orm3']);
Route::get('orm4', ['uses' => 'StudentController@orm4']);