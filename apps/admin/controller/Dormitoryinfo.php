<?php
namespace app\admin\controller;
use think\Controller;
class Dormitoryinfo extends Checklogin
{
    public function index(){
        $count=db('dormitoryinfo')->query("select count(*) as count from dormitoryinfo ");
        $page=1;
        $pagesize=5;
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
        //$this->assign('academyinfo',$academyinfo);
        $page_assign['page_content']="<ul class='pagination' style='visibility: visible;'>";
        if($page_assign['page'] ==1 ){
            $page_assign['page_content']=$page_assign['page_content']."  <li class='prev disabled' ><a href='#' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";
        }else{
            $page_assign['page_content']=$page_assign['page_content']." <li class='prev' ><a onclick='select_page(1,{$page_assign['pagesize']})' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";

        }
        for($i=1;$i<=$page_assign['pagemax'];$i++){
            if($i == $page_assign['page']){
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i} active' id='page_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";

            }else{
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";
            }
        }
        if($page_assign['page'] ==$page_assign['pagemax'] ){
            $page_assign['page_content']=$page_assign['page_content']."<li class='next disabled'><a  title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";

        }else{
            $page_assign['page_content']=$page_assign['page_content']."<li class='next'><a onclick='select_page({$page_assign['pagemax']},{$page_assign['pagesize']})' title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";
        }
        //页码显示
        $page_assign['page_content']=$page_assign['page_content']."</ul>";
        //共多少条显示
        if($page_assign['page'] == $page_assign['pagemax'] ){
            $pg=$page_assign['pagestart']+1;
            $page_assign['page_all']="显示 第 $pg 条 到 {$page_assign['count']} 条 共 {$page_assign['count']} 条";
        }else{
            $pg=$page_assign['pagestart']+1;
            $pg_end=$page_assign['page']*$page_assign['pagesize'];
            $page_assign['page_all']="显示 第 $pg 条 到 $pg_end 条 共 {$page_assign['count']} 条";
        }
        $this->assign('page_assign',$page_assign);
        $sql="select * from dormitoryinfo order by DormitoryNo desc limit $startpage,$pagesize";
        $dormitoryinfo=db('dormitoryinfo')->query($sql);
        $this->assign('dormitoryinfo',$dormitoryinfo);
        return $this->fetch('dormitoryinfo/index');
    }
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
        $page_assign['page_content']="<ul class='pagination' style='visibility: visible;'>";
        if($page_assign['page'] ==1 ){
            $page_assign['page_content']=$page_assign['page_content']."  <li class='prev disabled' ><a href='#' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";
        }else{
            $page_assign['page_content']=$page_assign['page_content']." <li class='prev' ><a onclick='select_page(1,{$page_assign['pagesize']})' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";

        }
        for($i=1;$i<=$page_assign['pagemax'];$i++){
            if($i == $page_assign['page']){
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i} active' id='page_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";

            }else{
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";
            }
        }
        if($page_assign['page'] ==$page_assign['pagemax'] ){
            $page_assign['page_content']=$page_assign['page_content']."<li class='next disabled'><a  title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";

        }else{
            $page_assign['page_content']=$page_assign['page_content']."<li class='next'><a onclick='select_page({$page_assign['pagemax']},{$page_assign['pagesize']})' title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";
        }
        //页码显示
        $page_assign['page_content']=$page_assign['page_content']."</ul>";
        //共多少条显示
        if($page_assign['page'] == $page_assign['pagemax'] ){
            $pg=$page_assign['pagestart']+1;
            $page_assign['page_all']="显示 第 $pg 条 到 {$page_assign['count']} 条 共 {$page_assign['count']} 条";
        }else{
            $pg=$page_assign['pagestart']+1;
            $pg_end=$page_assign['page']*$page_assign['pagesize'];
            $page_assign['page_all']="显示 第 $pg 条 到 $pg_end 条 共 {$page_assign['count']} 条";
        }
        $this->assign('page_assign',$page_assign);
        if($DormitoryNo != ''){
            $sql="select * from dormitoryinfo where DormitoryNo like '%$DormitoryNo%' order by DormitoryNo desc limit $startpage,$pagesize";
        }else{
            $sql="select * from dormitoryinfo order by DormitoryNo desc limit $startpage,$pagesize";
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

