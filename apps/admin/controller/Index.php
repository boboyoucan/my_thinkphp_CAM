<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        //判断是否登录
        if(session('name')=='' || session('type')==''){
            $this->redirect('index/index/index');
        }
        return $this->fetch('index');

    }
}

