<?php
namespace app\home\controller;

use think\Controller;
use app\admin\model\index as IndexList;
use think\Db;


class Index extends Controller
{
    public function index()
    {
        $model = new IndexList();
        //查询
        $list = $model->selects();
        $this->assign('list', $list);
        //顶置
        $data = $model->top();
        $this->assign('data', $data);

        return $this->fetch();
    }
    public function search()
    {
        $title = input('title','');
        $model = new IndexList();
        $data = $model->where('title','like',"%$title%")->paginate(7);
        return $data;
    }
    public function content()
    {
        $aid = input('aid');
        $model = new IndexList();
        $data = $model->where('aid','=',$aid)->select();
        $list = collection($data)->toArray();
        $list = $model->order('show_num','desc')->limit(0,9)->select();
        $list = collection($list)->toArray();

        $this->assign('data',$data);
        $this->assign('list',$data);
        return $this->fetch();
    }
}
