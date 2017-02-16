<?php
namespace app\admin\controller;
use think\Controller;

include "Common.php";
class Dormitoryinfo extends Common
{
    public function index(){
        $count=db('dormitoryinfo')->query("select count(*) as count from dormitoryinfo ");
        $page=1;
        $pagesize=5;
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);
        $sql="select * from dormitoryinfo order by DormitoryNo desc limit {$page_assign['pagestart']},$pagesize";
        $this->assign('page_assign',$page_assign);
        $dormitoryinfo=db('dormitoryinfo')->query($sql);
        $this->assign('dormitoryinfo',$dormitoryinfo);
        return $this->fetch('dormitoryinfo/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：宿舍信息页面显示
     *****************************************/
    public function dormitoryinfo($page=1,$pagesize=5,$DormitoryName=''){
        //数据库总条数
        if($DormitoryName != ''){
            $count=db('dormitoryinfo')->query("select count(*) as count from dormitoryinfo where DormitoryNo like '%$DormitoryName%'");
        }else{
            $count=db('dormitoryinfo')->query("select count(*) as count from dormitoryinfo ");
        }
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);
        if($DormitoryName != ''){
            $sql="select * from dormitoryinfo where DormitoryName like '%$DormitoryName%' order by DormitoryNo desc limit  {$page_assign['pagestart']},$pagesize";
        }else{
            $sql="select * from dormitoryinfo order by DormitoryNo desc limit {$page_assign['pagestart']},$pagesize";
        }
        $dormitoryinfo=db('dormitoryinfo')->query($sql);
        $paging=$page_assign['page_content'];
        $dormitoryinfo[0]['paging']=$paging;
        $dormitoryinfo[0]['pageall']=$page_assign['page_all'];
        return $dormitoryinfo;
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：宿舍添加
     *****************************************/
    public function DormitoryAdd(){
        $Dormitory=db('dormitoryinfo')->where('DormitoryNo',$_POST['DormitoryNo'])->find();
        if($Dormitory == null){
            $sql="insert into dormitoryinfo (Building,Unit,DormitoryNo,DormitoryType,DormitoryPeopleNo,DormitoryPhone) values ('{$_POST['Building']}','{$_POST['Unit']}','{$_POST['DormitoryNo']}','{$_POST['DormitoryType']}','{$_POST['DormitoryPeopleNo']}','{$_POST['DormitoryPhone']}')";
            echo $sql;
            dump($sql) ;
            $db_Dormitory=db('dormitoryinfo')->execute("insert into dormitoryinfo (Building,Unit,DormitoryNo,DormitoryType,DormitoryPeopleNo,DormitoryPhone) values ('{$_POST['Building']}','{$_POST['Unit']}','{$_POST['DormitoryNo']}','{$_POST['DormitoryType']}','{$_POST['DormitoryPeopleNo']}','{$_POST['DormitoryPhone']}')");
            if($db_Dormitory){
                echo $_POST['DormitoryNo'];
                echo "插入成功";
                $this->redirect('admin/dormitoryinfo/index');
            }
            else{
                echo $_POST['DormitoryNo'];
                echo "插入失败";
                $this->redirect('admin/dormitoryinfo/index');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/dormitoryinfo/index');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：宿舍删除
     *****************************************/
    public function DormitoryDelete($DormitoryId=''){
        $Dormitory=db('dormitoryinfo')->where('DormitoryId',$DormitoryId)->find();
        if($Dormitory == null){
            $check_Dormitory_del['flag']=0;
            $check_Dormitory_del['mesg']='要删除的宿舍不存在';
            return $check_Dormitory_del;
        }
        else{
            db('dormitoryinfo')->execute("delete from dormitoryinfo where DormitoryId = '$DormitoryId'");
            $check_Dormitory_del['flag']=1;
            $check_Dormitory_del['mesg']='删除成功！';
            return $check_Dormitory_del;

        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：宿舍名称修改
     *****************************************/
    public function DormitoryUpdate($DormitoryId='',$Building='',$Unit='',$DormitoryNo='',$DormitoryType='',$DormitoryPeopleNo='',$DormitoryPhone=''){
        $Dormitory=db('dormitoryinfo')->where('DormitoryId',$DormitoryId)->find();
        if($Dormitory == null){
            $check_Dormitory['flag']=0;
            $check_Dormitory['mesg']='宿舍不存在';
//            $this->assign('check_Academy',$check_Major);
            return $check_Dormitory;
//            echo "<script>alert('不存在');</script>";
//            $this->redirect('admin/dormitoryinfo/index');
        }
        else{
            db('dormitoryinfo')->execute("update dormitoryinfo set Building='$Building',Unit='$Unit',DormitoryNo='$DormitoryNo',DormitoryType='$DormitoryType',DormitoryPeopleNo='$DormitoryPeopleNo',DormitoryPhone='$DormitoryPhone' where DormitoryId='$DormitoryId'");
            $check_Dormitory['flag']=1;
            $check_Dormitory['mesg']='更新成功！';
//            $this->assign('check_Academy',$check_Major);
            return $check_Dormitory;
//            $this->redirect('admin/dormitoryinfo/index');
        }

    }
}

