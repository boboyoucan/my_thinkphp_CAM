<?php
namespace app\admin\controller;
use think\Controller;
class Checklogin extends Controller
{
    public function _initialize()
    {
        //公共方法判断是否登录
        if(session('name')=='' || session('type')==''){
            $this->redirect('index/index/index');
        }
//        elseif(session('type') !='0'){
//            $this->error("没权限");
//            $this->redirect('index/index/index');
//        }
        parent::_initialize(); // TODO: Change the autogenerated stub
    }

}

