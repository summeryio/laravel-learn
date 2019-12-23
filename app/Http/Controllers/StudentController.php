<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function query() {
        // 插入数据，返回bool值
        /* $bool = DB::table('students') -> insert(
            ['name' => 'imooc', 'age' => 20]
        );
        var_dump($bool); */


        // 插入数据，返回id值
        /* $id = DB::table('students') -> insertGetId(
            ['name' => 'test', 'age' => 40]
        );
        var_dump($id); */

        // 插入多条数据，返回bool值
        $bool = DB::table('students') -> insert([
            ['name' => 'insert1', 'age' => 31],
            ['name' => 'insert2', 'age' => 32]
        ]);
        var_dump($bool);
    }


    // ====== 查询构造器 ======
    public function query2() {
        // 更新数据，返回被更新的条数
        /* $num = DB::table('students')
            -> where('id', 10000)
            -> update(['age' => 100]);

        var_dump($num); */

        // 自增，可带参数，默认为1; decrement 自减
        /* $num = DB::table('students') -> increment('age', 10);
        var_dump($num); */

        // 给定条件的自增
        /* $num = DB::table('students') 
            -> where('id', 10000)
            -> increment('age', 100);
        var_dump($num); */

        // 给定条件自增，且修改另一个值
        /* $num = DB::table('students') 
            -> where('id', 10003)
            -> increment('age', 10, ['name' => 'baidu']);
        var_dump($num); */
    }

    public function query3() {
        // 删除指定数据
        /* $num = DB::table('students')
            -> where('id', 10005)
            -> delete();
        var_dump($num); */

        // 根据条件删除指定数据，返回被删除条数
        /* $num = DB::table('students')
            -> where('id', '>=', 10002)
            -> delete();
        var_dump($num); */

        // 清空数据表
        // DB::table('students') -> truncate();
    }


    public function query4() {
        // 获取所有数据
        // $students = DB::table('students') -> get();

        // 取第一个数据
        /* $student = DB::table('students') 
            -> orderby('id', 'desc')
            -> first();
        dump($student); */

        // where() 设置条件
        /* $students = DB::table('students') 
            -> where('id', '>', 10)
            -> get();
        dump($students); */

        // whereRaw() 设置多个条件
        /* $students = DB::table('students') 
            -> whereRaw('id >= ? && age > ?', [10, 31])
            -> get();
        dump($students); */

        // 返回全部的name
        /* $students = DB::table('students') -> pluck('name');
        dump($students); */

        // 返回全部的name及对应的下标
        /* $students = DB::table('students') -> pluck('name', 'id');
        dump($students); */

        // select() 指定查找
        /* $students = DB::table('students') 
            -> select('id', 'name', 'age')
            -> get();
        dump($students); */

        
        // chunk() 查询数据，需要加上orderby()
        echo '<pre>';
        DB::table('students') 
            -> orderby('id')
            -> chunk(2, function ($students) {
                dump($students);

                return false; // 代表只查询一次
            }
        );
        echo '</pre>';
    }

    public function query5() {
        // count() 返回数据条数
        /* $num = DB::table('students') -> count();
        var_dump($num); */

        // max() min() 返回最大/最小
        /* $max = DB::table('students') -> max('age');
        var_dump($max); */

        // avg() 返回平均值
        /* $avg = DB::table('students') -> avg('age');
        var_dump($avg); */

        // sum() 返回总和值
        $sum = DB::table('students') -> sum('age');
        var_dump($sum);
    }
}
