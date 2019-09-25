<?php
namespace app\home\controller;

use think\Controller;
use think\Db;


class Index extends Controller
{
    public function index()
    {

        //查询
        $data = Db::table('articleinfo')->where('aid','>',0)->paginate(10);
        $this->assign('data',$data);

        return $this->fetch();

    }

}
