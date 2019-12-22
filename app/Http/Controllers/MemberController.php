<?php

namespace App\Http\Controllers;
use App\Member; // 这里需要，否则调用报错

class MemberController extends Controller {
    public function info($id) {

        return Member::getMember();

    }
}