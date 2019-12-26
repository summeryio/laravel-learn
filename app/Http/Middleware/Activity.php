<?php

namespace App\Http\Middleware;
use Closure;

class Activity {
    // 前置操作
    /* public function handle($request, Closure $next) {
        if (time() < strtotime('2019-12-25')) {
            return redirect('activity0');
        }

        return $next($request);
    } */


    public function handle($request, Closure $next) {
        $res = $next($request);

        echo $res;

        echo '我是后置操作';
    }
}