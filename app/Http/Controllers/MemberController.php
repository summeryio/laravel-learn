<?php

namespace App\Http\Controllers;


class MemberController extends Controller {
    public function info($id) {

        // 按文件夹划分，传递参数
        return view('member/info', [
            'name' => 'summery',
            'age' => 22
        ]);

    }
}