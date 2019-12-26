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
        $students = Student::paginate(10);
        
        return view('student.index', [
            'students' => $students
        ]);
    }
    
    // 添加学生页
    public function create(Request $request) {
        
        if ($request -> isMethod('POST')) {
            $data = $request -> input('Student');
            
            if (Student::create($data)) {
                return redirect('student/index') -> with('success', '添加成功');
            } else {
                return redirect() -> back() -> with('failed', '添加失败');
            }
        }
        
        return view('student.create');
    }

    // 保存添加页
    public function save(Request $request) {
        $data = $request -> input('Student');
        $student = new Student();
        $student -> name = $data['name'];
        $student -> age = $data['age'];
        $student -> sex = $data['sex'];

        if ($student -> save()) {
            return redirect('student/index');
        } else {
            return redirect() -> back();
        }
        
    }
}
