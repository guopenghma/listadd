<?php
/**
 * Created by PhpStorm.
 * User: 郭鹏航
 * Date: 2019/2/19
 * Time: 8:43
 */
namespace app\admin\model;

use think\Model;
use think\Db;

class index extends Model
{
    protected $pk="aid";
    protected $table='articleinfo';
    public function top()
    {
        $data = $this->where('is_top','=',0)->select();
        return $data;
    }
    public function selects()
    {
        $res = $this->where('is_top','=',1)->order('addtime','desc')->paginate(7);
        return $res;
    }
}