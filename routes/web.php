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


// ===== 基础路由 ======
// get
Route::get('basic1', function () {
    return 'Hello World!';
});

// post 页面报错
Route::post('basic2', function () {
    return 'basic2';
});


// ===== 多请求路由 ======
// 指定 get & post
Route::match(['get', 'post'], 'multy', function () {
    return 'multy';
});

// 任何类型路由
Route::any('multy2', function () {
    return 'multy2';
});



// ===== 路由参数 ======
/* Route::get('user/{id}', function ($id) {
    return 'user-id-' . $id;
}); */

// 可选默认值，{name?} 这里要加 ?
/* Route::get('user/{name?}', function ($name = 'Ezreal') {
    return 'user-name-' . $name;
}); */

// 使用正则匹配路由
/* Route::get('user/{name?}', function ($name = 'Ezreal') {
    return 'user-name-' . $name;
}) -> where('name', '[A-Za-z]+'); */


// 多个路由参数
/* Route::get('user/{id}/{name?}', function ($id, $name = 'Ezreal') {
    return 'user-id-'. $id . '<br />' . 'user-name-' . $name;
}) -> where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']); */



// ===== 路由别名 ======
// 作用在于，在别处使用别名即可访问到路由，即使路由改变了
/* Route::get('user/center', ['as' => 'center', function () {
    return route('center');
}]); */



// ===== 路由群组 ======
// 给下面两条路由添加前缀
Route::group(['prefix' => 'member'], function () {
    Route::get('user/center', ['as' => 'center', function () {
        return route('center');
    }]);

    Route::get('multy2', function () {
        return 'member-multy2';
    });
});





// ===== 控制器匹配路由 ======

// 两种写法皆可，get, post, any, match 跟上面一样
// Route::get('member/info', 'MemberController@info');
// Route::get('member/info', ['uses' => 'MemberController@info']);

// 别名
/* Route::get('member/info', [
    'uses' => 'MemberController@info',
    'as' => 'memberinfo'
]); */


// 带参数且验证
Route::get('member/{id}', ['uses' => 'MemberController@info'])
-> where('id', '[0-9]+');