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



// Request
Route::get('request1', ['uses' => 'StudentController@request1']);


// Session
Route::group(['middleware' => ['web']], function () {
    Route::any('session1', ['uses' => 'StudentController@session1']);
    Route::any('session2', [
        'as' => 'session2',
        'uses' => 'StudentController@session2'
    ]);
});

Route::get('response', ['uses' => 'StudentController@response']);


// Middleaware

// 宣传页
Route::get('activity0', ['uses' => 'StudentController@activity0']);

// 活动页
Route::group(['middleware' => ['activity']], function () {
    Route::get('activity1', ['uses' => 'StudentController@activity1']);
    Route::get('activity2', ['uses' => 'StudentController@activity2']);
});

