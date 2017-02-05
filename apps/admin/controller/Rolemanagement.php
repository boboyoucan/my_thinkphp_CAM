<?php
namespace app\admin\controller;
use think\Controller;
class  Rolemanagement extends Checklogin

{
    /*****************************************
     * 作者：王波文
     * 时间：2017年1月25日
     *方法：角色管理首页
     *****************************************/
    public function index()
    {
        $data=db('admininfo')->query("select id AS AdminId,AdminName,PhoneNo,Email,AdminType,WhichBuilding from admininfo");
        $this->assign('data',$data);
        return $this->fetch('index');
    }

}

