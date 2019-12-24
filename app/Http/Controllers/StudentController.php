<?php

namespace App\Http\Controllers;

use App\Model\Student; // 要加这个

class StudentController extends Controller
{
    public function orm1() {
        // all() 查询表的所有记录
        /* $students = Student::all();
        dump($students); */

        
        // 根据id查找
        /* $student = Student::find(11);
        dump($student); */

        // findOrFail() 根据主键查找，无则返回404
        /* $student = Student::findOrFail(111);
        dump($student); */



        // ===== 使用查询构造器 =====

        // 返回结果和上面 all() 一样
        /* $students = Student::get();
        dump($students); */

        // 使用where
        /* $student = Student::where('id', '>', 10)
            -> orderby('age', 'desc')
            -> first();

        dump($student); */

        // chunk()
        /* Student::chunk(2, function ($students) {
            dump($students);
        }); */



        // ===== 使用聚合函数 =====
        // $num = Student::count();
        $max = Student::where('id', '>', '10') -> max('age');
        var_dump($max);
    }


    // ===== 新增数据 =====
    public function orm2() {
        // 使用模型新增数据
        /* $student = new Student();
        $student -> name = '夏天2';
        $student -> age = 28;
        $bool = $student -> save();

        dump($bool); */


        // 返回创建时间，自定义格式化
        /* $student = Student::find(17);
        echo date('Y-m-d H:i:s', $student -> created_at); */


        // 使用模型create批量新增数据，返回student对象
        /* $student = $student = Student::create(
            ['name' => 'test2', 'age' => 22]
        );
        dump($student); */


        // firstOrCreate() 查找数据，无则创建
        /* $student = Student::firstOrCreate(
            ['name' => 'test3']
        );
        dump($student); */


        // firstOrNew() 同上，创建新的student实例，不过需要执行save()
        $student = Student::firstOrNew(
            ['name' => 'test4']
        );
        $bool = $student -> save();
        dump($bool);
    }


    // ===== 更新数据 =====
    public function orm3() {
        // 需要将asDateTime() 模型方法注释，否则报错
        /* $student = Student::find(21);
        $student -> name = 'admin';
        $bool = $student -> save();

        dump($bool); */

        // 根据条件更新
        /* $num = Student::where('id', '>', '12') -> update(
            ['age' => 20]
        );
        var_dump($num); */
    }


    // ===== 删除数据 =====
    public function orm4() {
        // 通过模型删除
        /* $student = Student::find(21);
        $bool = $student -> delete();
        
        var_dump($bool); */

        // 通过主键删除
        // $num = $student = Student::destroy(20);
        // $num = $student = Student::destroy(18, 19);
        // $num = $student = Student::destroy([18, 19]);
        // var_dump($num);

        // 使用where
        /* $num = Student::where('id', '>', 14) -> delete();
        var_dump($num); */
    }
}
