<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/10
 * Time: 18:51
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //指定表名
    protected $table = 'student';
    //指定主键
    protected $primaryKey = 'id';

    protected $fillable = ['name','age'];

    protected $guarded = ['id'];
    //自动维护时间戳
    public $timestamps = false;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }
}