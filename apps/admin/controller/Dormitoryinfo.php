<?php
namespace app\admin\controller;
use think\Controller;
class Dormitoryinfo extends Controller
{
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：宿舍信息页面显示
     *****************************************/
    public function dormitoryinfo($page=1, $pagesize=5,$DormitoryNo=''){
        //数据库总条数
        if($DormitoryNo != ''){
            $count=db('dormitoryinfo')->query("select count(*) as count from dormitoryinfo where DormitoryNo like '%$DormitoryNo%'");
        }else{
            $count=db('dormitoryinfo')->query("select count(*) as count from dormitoryinfo ");
        }
        //一页显示的多少条
//        $pagesize=5;
        //最大页数
        //echo ($count[0]['count']);
        $pagemax=$count[0]['count']/$pagesize;
        $pgmx=ceil($pagemax);
        if($page>=$pagemax &&$pagemax !=0 )
        {$page=ceil($pagemax);}
        $startpage=$pagesize*($page-1);
        $page_assign['pagemax']=$pgmx;
        $page_assign['pagestart']=$startpage;
        $page_assign['page']=$page;
        $page_assign['count']=$count[0]['count'];
        $page_assign['pagesize']=$pagesize;
        $this->assign('page_assign',$page_assign);
        if($DormitoryNo != ''){
            $sql="select * from dormitoryinfo where DormitoryNo like '%$DormitoryNo%' order by DormitoryNo desc limit $startpage,$pagesize";
        }else{
            $sql="select * from dormitoryinfo order by DormitoryNo desc limit $startpage,$pagesize";
        }
        $dormitoryinfo=db('dormitoryinfo')->query($sql);
        $this->assign('dormitoryinfo',$dormitoryinfo);
        return $this->fetch('dormitoryinfo/index');
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

                $this->redirect('admin/dormitoryinfo/dormitoryinfo');
            }
            else{
                echo $_POST['DormitoryNo'];
                echo "插入失败";

                $this->redirect('admin/dormitoryinfo/dormitoryinfo');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/dormitoryinfo/dormitoryinfo');
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
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/dormitoryinfo/dormitoryinfo');
        }
        else{
            db('dormitoryinfo')->execute("delete from dormitoryinfo where DormitoryId = '$DormitoryId'");
            $this->redirect('admin/dormitoryinfo/dormitoryinfo');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：宿舍名称修改
     *****************************************/
    public function DormitoryUpdate($DormitoryId=''){
        $Dormitory=db('dormitoryinfo')->where('DormitoryId',$DormitoryId)->find();
        if($Dormitory == null){
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/dormitoryinfo/dormitoryinfo');
        }
        else{
            db('dormitoryinfo')->execute("update dormitoryinfo set Building='{$_POST['Update_Dormitory_Building']}',Unit='{$_POST['Update_Dormitory_Unit']}',DormitoryNo='{$_POST['Update_Dormitory_DormitoryNo']}',DormitoryType='{$_POST['Update_Dormitory_DormitoryType']}',DormitoryPeopleNo='{$_POST['Update_Dormitory_DormitoryPeopleNo']}',DormitoryPhone='{$_POST['Update_Dormitory_DormitoryPhone']}' where DormitoryId='$DormitoryId'");
            $this->redirect('admin/dormitoryinfo/dormitoryinfo');
        }

    }
}

