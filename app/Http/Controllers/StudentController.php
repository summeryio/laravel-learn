<?php

namespace App\Http\Controllers;


class StudentController extends Controller {
    public function section1() {
        $name = 'summery';
        $arr = ['summery', 'imooc'];
        
        return view('student.section1', [
            'name' => $name,
            'arr' => $arr
        ]);
    }
}
