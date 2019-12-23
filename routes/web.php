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




Route::get('query', ['uses' => 'StudentController@query']);
Route::get('query2', ['uses' => 'StudentController@query2']);
Route::get('query3', ['uses' => 'StudentController@query3']);
Route::get('query4', ['uses' => 'StudentController@query4']);
Route::get('query5', ['uses' => 'StudentController@query5']);