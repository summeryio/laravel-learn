<?php

namespace App\Http\Controllers;
use App\Model\Student;

class StudentController extends Controller {
    public function section1() {
        $name = 'summery1';
        $arr = ['summery', 'imooc'];
        // $students = Student::get();
        $students = [];
        
        return view('student.section1', [
            'name' => $name,
            'arr' => $arr,
            'students' => $students
        ]);
    }

    public function urlTest() {
        return 'urlTest';
    }
}
