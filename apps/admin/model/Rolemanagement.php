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
        $data['data']=db('admininfo')->query("select AdminId,AdminName,PhoneNo,Email,AdminType,WhichBuilding from admininfo".$search.$orderSql.$limitSql);
        return $data;
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月17日
     *方法：角色管理首页数据添加
     *****************************************/

    public function add(array $data = []){
        if($data['RePassword'] != $data['Password']){
            return info('两次密码不一致！',0);
        }
        $db_admin=db('admininfo')
            ->where('AdminName',$data['AdminName'])
            ->find();
        if($db_admin != null){
            return info('用户已存在！',0);
        }
        $data['Password'] = md5($data['Password']);
        if($data['AdminType']==1){
            $res=db('admininfo')->execute("insert into admininfo (AdminName,AdminPassword,PhoneNo,Email,AdminType,WhichBuilding) VALUES ('{$data['AdminName']}','{$data['Password']}','{$data['PhoneNo']}','{$data['Email']}','{$data['AdminType']}','{$data['WhichBuilding']}')");
        }else{
            $res=db('admininfo')->execute("insert into admininfo (AdminName,AdminPassword,PhoneNo,Email,AdminType) VALUES ('{$data['AdminName']}','{$data['Password']}','{$data['PhoneNo']}','{$data['Email']}','{$data['AdminType']}')");
        }
        if($res == 1){
             return info('添加成功！',1);
        }else{
             return info('添加失败！',0);
        }
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月18日
     *方法：角色管理首页数据编辑
     *****************************************/

    public function edit(array $data = [])
    {
        if($data['RePassword'] != $data['Password']){
            return info('两次密码不一致！',0);
        }
        $data['Password'] = md5($data['Password']);
        if($data['AdminType']==1){
            $res=db('admininfo')->execute("update admininfo set AdminName='{$data['AdminName']}',AdminPassword='{$data['Password']}',PhoneNo='{$data['PhoneNo']}',Email='{$data['Email']}',AdminType='{$data['AdminType']}',WhichBuilding='{$data['WhichBuilding']}' where AdminId='{$data['AdminId']}'");
        }else{
            $res=db('admininfo')->execute("update admininfo set AdminName='{$data['AdminName']}',AdminPassword='{$data['Password']}',PhoneNo='{$data['PhoneNo']}',Email='{$data['Email']}',AdminType='{$data['AdminType']}',WhichBuilding='' where AdminId='{$data['AdminId']}'");
        }
        if($res == 1){
            return info('编辑成功！',1);
        }else{
            return info('编辑失败！',0);
        }
    }
    /*****************************************
     * 作者：王波文
     * 时间：2017年2月18日
     *方法：角色管理首页数据删除
     *****************************************/

    public function del($data){
        $AdminId= intval($data);
        if($AdminId ==''){
            return info('数据id异常',0);
        }
        $res=db('admininfo')->where('AdminId',$AdminId)->find();
        if($res==1 ){
            $del=db('admininfo')->where('AdminId',$AdminId)->delete();
            if($del==1 ){
                return info('删除成功！',1);
            }else{
                return info('删除失败！',0);
            }
            return info('删除成功！',1);
        }else{
            return info('要删除的对象不存在！',0);
        }
    }
}

