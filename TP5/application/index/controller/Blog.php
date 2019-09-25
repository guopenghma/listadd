<?php

namespace app\index\controller;

use think\Controller;
use think\Url;

class Blog extends Controller
{
    public function get($id)
    {
        return '查看id=' . $id . '的内容';
    }

    public function read($name)
    {

        return $this->fetch();

        /* 在 后台生成 URL地址
        echo  Url::build('blog/read', 'name=thinkphp');
        echo "<hr />";

        echo url('blog/read', 'name=thinkphp');
        echo "<hr />";

        echo Url::build('blog/archive', 'year=2015&month=05');
        echo "<hr />";

        echo Url::build('blog/archive', ['year' => '2015', 'month' => '05']);
        echo "<hr />";


        return '查看name=' . $name . '的内容';
        */
    }

    // 添加一篇博客
    public function addBlog()
    {
        dump($_POST);
    }

    public function archive($year, $month)
    {
        return '查看' . $year . '/' . $month . '的归档内容';
    }
}
