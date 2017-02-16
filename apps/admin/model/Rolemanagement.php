<?php
namespace app\admin\model;

use think\Config;
use think\Db;
use think\Loader;
use think\Model;

class  Rolemanagement extends Model

{
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月16日
     *方法：角色管理首页数据bootstrap table 显示
     *****************************************/
    public function index($search,$limitSql,$orderSql)
    {
        $data['sum']=db('admininfo')->query("select count(*) as sum from admininfo ".$search);
        $data['data']=db('admininfo')->query("select id AS AdminId,AdminName,PhoneNo,Email,AdminType,WhichBuilding from admininfo".$search.$orderSql.$limitSql);
        return $data;
    }

}

