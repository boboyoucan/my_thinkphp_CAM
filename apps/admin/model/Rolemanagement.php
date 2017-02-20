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
        $data['data']=db('admininfo')->query("select AdminId as id,AdminName,PhoneNo,Email,AdminType,WhichBuilding from admininfo".$search.$orderSql.$limitSql);
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
            $res=db('admininfo')->execute("update admininfo set AdminName='{$data['AdminName']}',AdminPassword='{$data['Password']}',PhoneNo='{$data['PhoneNo']}',Email='{$data['Email']}',AdminType='{$data['AdminType']}',WhichBuilding='{$data['WhichBuilding']}' where AdminId='{$data['Id']}'");
        }else{
            $res=db('admininfo')->execute("update admininfo set AdminName='{$data['AdminName']}',AdminPassword='{$data['Password']}',PhoneNo='{$data['PhoneNo']}',Email='{$data['Email']}',AdminType='{$data['AdminType']}',WhichBuilding='' where AdminId='{$data['Id']}'");
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
        if($res != null){
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


    /*****************************************
     * 作者：王波文
     * 时间：2017年2月16日
     *方法：角色管理学生首页数据bootstrap table 显示
     *****************************************/
    public function StudentRole($search,$limitSql,$orderSql)
    {
        $data['sum']=db('studentinfo')->query("select count(*) as sum from studentinfo  where ".$search);
        $data['data']=db('studentinfo')->query("select ST.id,ST.StudentNo,ST.StudentName,ST.Sex,ST.Nationality,ST.Birthday,ST.PhoneNo,ST.Email,ST.Valuables, concat(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory, concat(MA.MajorName,'-',CL.ClassName) as Class,ST.EntranceTime,ST.Role from studentinfo AS ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId  and ".$search.$orderSql.$limitSql);
//        echo "select ST.id,ST.StudentNo,ST.StudentName,ST.Sex,ST.Nationality,ST.Birthday,ST.PhoneNo,ST.Email,ST.Valuables, concat(DO.Building,'-',DO.Unit,'-',DO.DormitoryNo) as Dormitory, concat(MA.MajorName,'-',CL.ClassName) as Class,ST.EntranceTime,ST.Role from studentinfo AS ST JOIN classinfo as CL JOIN majorinfo as MA JOIN dormitoryinfo as DO where ST.CId=CL.ClassId and CL.MId=MA.MajorId and ST.DId=DO.DormitoryId  and ".$search.$orderSql.$limitSql;
//        exit;
        return $data;
    }


    /*****************************************
     * 作者：王波文
     * 时间：2017年2月17日
     *方法：角色管理首页数据添加
     *****************************************/

    public function StudentAdd(array $data = []){
        if($data['RePassword'] != $data['Password']){
            return info('两次密码不一致！',0);
        }
        $db_student=db('studentinfo')
            ->where('StudentName',$data['StudentName'])
            ->find();
        if($db_student != null){
            return info('用户已存在！',0);
        }
        $data['Password'] = md5($data['Password']);
        $res=db('studentinfo')->execute("insert into studentinfo (StudentNo, StudentName, Password, Sex, Nationality, Birthday, PhoneNo, Email, Valuables, DId, CId, EntranceTime, Role) values ('{$data['StudentNo']}','{$data['StudentName']}','{$data['Password']}','{$data['Sex']}','{$data['Nationality']}','{$data['Birthday']}','{$data['PhoneNo']}','{$data['Email']}','{$data['Valuables']}','{$data['Dormitory']}','{$data['Class']}','{$data['EntranceTime']}','{$data['Role']}')");
        if($res == 1){
            return info('添加成功！',1);
        }else{
            return info('添加失败！',0);
        }
    }

    /*****************************************
     * 作者：王波文
     * 时间：2017年2月20日
     *方法：角色管理学生角色首页数据编辑
     *****************************************/

    public function StudentEdit(array $data = [])
    {
        if($data['RePassword'] != $data['Password']){
            return info('两次密码不一致！',0);
        }
        $data['Password'] = md5($data['Password']);
        $res=db('studentinfo')->execute("update studentinfo set StudentNo='{$data['StudentNo']}',StudentName='{$data['StudentName']}',Password='{$data['Password']}',Sex='{$data['Sex']}', Nationality='{$data['Nationality']}', Birthday='{$data['Birthday']}', PhoneNo='{$data['PhoneNo']}',Email='{$data['Email']}',Valuables='{$data['Valuables']}',DId='{$data['Dormitory']}' ,CId='{$data['Class']}' where id='{$data['Id']}'");
        if($res == 1){
            return info('编辑成功！',1);
        }else{
            return info('编辑失败！',0);
        }
    }

    /*****************************************
     * 作者：王波文
     * 时间：2017年2月20日
     *方法：角色管理学生角色首页数据删除
     *****************************************/

    public function StudentDelete($data){
        $Id= intval($data);
        if($Id ==''){
            return info('数据id异常',0);
        }
        $res=db('studentinfo')->where('id',$Id)->find();
        if($res != null){
            $del=db('studentinfo')->where('id',$Id)->delete();
            if($del==1 ){
                return info('删除成功！',1);
            }else{
                return info('删除失败！',0);
            }
        }else{
            return info('要删除的对象不存在！',0);
        }
    }

}

