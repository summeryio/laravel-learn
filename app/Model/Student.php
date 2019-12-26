<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    protected $table = 'students'; // 指定 表名
    // protected $primaryKey = 'id'; // 指定 id
    
    public $timestamps = true; // 自动维护时间戳，默认为true

    // protected $fillable = ['name', 'age']; // 指定允许批量赋值的字段，$guarded：指定不允许赋值的字段

    // 添加数据时，设置为unix时间戳
    public function getDateFormat() {
        return time();
    }

    // 获取时间时，返回时间戳，而不格式化
    protected function asDateTime($val) {
        return $val;
    }
}
