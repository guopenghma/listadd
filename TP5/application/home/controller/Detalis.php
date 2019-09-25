<?php
/**
 * Created by PhpStorm.
 * User: 郭鹏航
 * Date: 2019/2/19
 * Time: 18:55
 */

namespace app\home\controller;

use think\Controller;
use think\Db;

class Detalis extends Controller
{
    public function detalis()
    {
        $input = input('request.');
        $tan= implode('',$input);
        $data = Db::table('articleinfo')->where('aid','=',$tan)->select();
        $this->assign('data',$data);

        return $this->fetch();
    }
}