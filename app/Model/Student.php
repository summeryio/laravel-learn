<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    const SEX_UN = 10;
    const SEX_MALE = 20;
    const SEX_FEMALE = 30;
    
    protected $table = 'students'; // 指定 表名
    // protected $primaryKey = 'id'; // 指定 id
    
    public $timestamps = true; // 自动维护时间戳，默认为true

    protected $fillable = ['name', 'age', 'sex']; // 指定允许批量赋值的字段，$guarded：指定不允许赋值的字段

    // 添加数据时，设置为unix时间戳
    public function getDateFormat() {
        return time();
    }

    // 获取时间时，返回时间戳，而不格式化
    protected function asDateTime($val) {
        return $val;
    }

    public function sex($ind = null) {
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_MALE => '男',
            self::SEX_FEMALE => '女'
        ];

        if ($ind !== null) {
            return array_key_exists($ind, $arr) ? $arr[$ind] : $arr[self::SEX_UN];
        }

        return $arr;
    }
}
