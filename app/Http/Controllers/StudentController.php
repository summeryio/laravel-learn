<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function test1() {
        // 返回获取的数组
        /* $students = DB::select('select * from students');
        var_dump($students); */

        // 新增数据，返回bool值
        /* $bool = DB::insert('insert into students(name, age) values(?, ?)', ['test', 90]);
        var_dump($bool); */

        // 更新数据，返回修改成功的条数 (注：再次刷新会变成0)
        /* $num = DB::update('update students set age = ? where name = ?', [110, 'test']);
        var_dump($num); */


        // 查询
        /* $students = DB::select('select * from students where id = ?', [10000]);
        dump($students); */

        // 返回删除的条数
        /* $num = DB::delete('delete from students where id > ?', [10000]);
        var_dump($num); */
    }
}
