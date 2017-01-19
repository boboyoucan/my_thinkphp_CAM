<?php
namespace app\admin\controller;
use think\Controller;
class  Rolemanagement extends Checklogin

{
    public function index()
    {
        $data=db('admininfo')->query("select AdminName,PhoneNo,Email,AdminType,WhichBuilding from admininfo");
        $this->assign('data',$data);
        return $this->fetch('index');
    }

}

