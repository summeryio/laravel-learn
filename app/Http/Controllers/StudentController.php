<?php

namespace App\Http\Controllers;
use App\Model\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Routing\Response;
use Illuminate\Http\RedirectResponse;


class StudentController extends Controller {
    // ======= Request ========
    public function request1(Request $request) {
        // 1. 取值
        // echo $request -> input('name');
        // echo $request -> input('mood', 'happy'); // 默认值


        // 2. 判断是否有该参数
        /* if ($request -> has('name')) {
            echo $request -> input('name');
        } else {
            echo '无该参数';
        } */


        // 3. 获取所有参数
        /* $res = $request -> all();
        dump($res); */


        // 4. 判断请求类型
        // echo $request -> method();

        /* if ($request -> isMethod('GET')) {
            echo 'Yes';
        } else {
            echo 'No';
        } */
        

        // 判断是否ajax请求
        /* $res = $request -> ajax();
        var_dump($res); */


        // 判断url路径
        /* $res = $request -> is('student/*');
        var_dump($res); */

        // 输出当前URL
        echo $request -> url();
        
    }

    // ======= Session ========
    public function session1(Request $request) {
        // 1. HTTP request session()
        /* $request -> session() -> put('key1', 'value1');
        echo $request -> session() -> get('key1'); */

        // 2. session()
        /* session() -> put('key2', 'value2');
        session() -> get('key2'); */


        // 3. Session
        /* Session::put('key3', 'value3');
        echo Session::get('key3');
        echo Session::get('key4', 'key4 -- default value'); // 设置默认值 */


        // 以数组形式存储数据
        /* Session::put(['key4' => 'value4']);
        echo Session::get('key4'); */


        // 把数据放到Session 数组中
        // Session::push('student', 'summer');
        // Session::push('student', 'imooc');
        // $res = Session::get('student', 'default');


        // 接上面，取出数据并删除
        /* $res = Session::pull('student', 'default');
        var_dump($res); */


        // 暂存数据，刷新页面就没了
        // Session::flash('flash-key', 'flash-value');
    }
    public function session2(Request $request) {
        // 取出所有的值
        /* $res = Session::all();
        dump($res); */


        // 判断session 中某个key是否存在
        /* if (Session::has('key1')) {
            $res = Session::all();
            dump($res);
        } else {
            echo 'key11 不存在';
        } */

        // 删除指定值
        // Session::forget('key1');

        // 删除全部
        // Session::flush();


        // return 'session2';
        return Session::get('message', '暂无数据');
    }


    // ======= Response ========
    public function response() {
        // 响应 JSON
        /* $data = [
            'code' => 200,
            'message' => 'success',
            'name' => 'summery'
        ];

        return Response() -> json($data); */


        // 重定向
        // return redirect('session2');

        // 重定向并传递数据
        // return redirect('session2') -> with('message', '我是来自response页面的快闪数据');

        /* return redirect() 
            -> action('StudentController@session2')
            -> with('message', '我是来自response页面的快闪数据'); */

        
        /* return redirect() 
            -> route('session2')
            -> with('message', '我是来自response页面的快闪数据'); */

        // 返回上一个页面
        // return redirect() -> back();

    }


    // ======= Middleware ========
    public function activity0() {
        return '活动快要开始啦，敬请期待';
    }
    public function activity1() {
        return '活动进行中1';
    }
    public function activity2() {
        return '活动进行中2';
    }
}
