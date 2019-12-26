<?php

namespace App\Http\Controllers;
use App\Model\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Routing\Response;
use Illuminate\Http\RedirectResponse;


class StudentController extends Controller {
    // 列表页
    public function index() {
        // $students = Student::get();
        $students = Student::paginate(2);
        
        return view('student.index', [
            'students' => $students
        ]);
    }
    
    // 添加学生页
    public function create() {
        return view('student.create');
    }

    // 保存添加页
    public function save(Request $request) {
        $data = $request -> input('Student');
        var_dump($data);
    }
}
