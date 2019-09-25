<?php
/**
 * Created by PhpStorm.
 * User: tm
 * Date: 2018/11/29
 * Time: 16:47
 */

namespace app\index\controller;

use think\Controller;
// 导入框架的模型的命名空间
use think\Db;

class HelloWorld extends Controller
{
    public function show($name,$age)
    {
        // echo 'helloworld!'.$name;
        // echo '<br />'.$age;
        $this->assign('name', $name);

        // fetch 方法 渲染一个页面。
        // 没有参数，渲染的是方法名的页面，
        // 也可以指定页面，可以省略模板文件的后缀
        return $this->fetch('hello');
    }

    public function showData()
    {
        // 控制器 调用 模型对象 获取数据
        // 如果配置表前缀 这里可以省略
        $data = Db::name('data')->find(3);

        // 数据交给视图对象来渲染页面
        $this->assign('data',$data);
        return $this->fetch();
    }
}