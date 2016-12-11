<?php
namespace app\admin\controller;
use think\Controller;
class Classinfo extends Controller
{
    public function index(){

        $count=db('classinfo')->query("select count(*) as count from classinfo");
        $page=1;
        $pagesize=5;
        //一页显示的多少条
//        $pagesize=4;
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
//        $majorinfo=db('majorinfo')->query("select * from majorinfo order by MajorId desc");
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
//        $this->assign('majorinfo',$majorinfo);
        $classinfo=db('classinfo')->query("select C.ClassId,C.MId,C.ClassName,M.MajorName,A.AcademyName from classinfo as C JOIN majorinfo as M JOIN academyinfo as A where C.MId=M.MajorId and M.AId=A.AcademyId order by ClassId desc limit $startpage,$pagesize");
        $this->assign('classinfo',$classinfo);
        return $this->fetch('classinfo/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：专业信息页面显示
     *****************************************/
    public function classinfo($page=1,$pagesize=5,$ClassName=''){
        //数据库总条数
        if($ClassName ==''){
            $count=db('classinfo')->query("select count(*) as count from classinfo");
        }else{
            $count=db('classinfo')->query("select count(*) as count from classinfo as C JOIN majorinfo as M JOIN academyinfo as A where C.MId=M.MajorId and M.AId=A.AcademyId and C.ClassName like '%$ClassName%' or C.MId=M.MajorId and M.AId=A.AcademyId and A.AcademyName like '%$ClassName%' or C.MId=M.MajorId and M.AId=A.AcademyId and M.MajorName like '%$ClassName%'");
        }
         //一页显示的多少条
//        $pagesize=4;
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
        //页码
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
//        $majorinfo=db('majorinfo')->query("select * from majorinfo order by MajorId desc");
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
//        $this->assign('majorinfo',$majorinfo);
        if($ClassName ==''){
            $classinfo=db('classinfo')->query("select C.ClassId,C.MId,C.ClassName,M.MajorName,A.AcademyName from classinfo as C JOIN majorinfo as M JOIN academyinfo as A where C.MId=M.MajorId and M.AId=A.AcademyId order by ClassId desc limit $startpage,$pagesize");
        }else {
            $classinfo = db('classinfo')->query("select C.ClassId,C.MId,C.ClassName,M.MajorName,A.AcademyName from classinfo as C JOIN majorinfo as M JOIN academyinfo as A where C.MId=M.MajorId and M.AId=A.AcademyId and C.ClassName like '%$ClassName%' or C.MId=M.MajorId and M.AId=A.AcademyId and A.AcademyName like '%$ClassName%' or C.MId=M.MajorId and M.AId=A.AcademyId and M.MajorName like '%$ClassName%' order by ClassId desc limit $startpage,$pagesize");
        }
        $this->assign('page_assign',$page_assign);
        $paging=$page_assign['page_content'];
        $classinfo[0]['paging']=$paging;
        $classinfo[0]['pageall']=$page_assign['page_all'];
        return $classinfo;

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院添加
     *****************************************/
    public function ClassAdd(){
        $Class=db('classinfo')->where('ClassName',$_POST['class'])->where('MId',$_POST['MId'])->find();
        if($Class == null){
            $db_Class=db('classinfo')->execute('insert into classinfo (MId,ClassName) values (:MajorId,:class)',['MajorId'=>$_POST['MId'],'class'=>$_POST['class']]);
            if($db_Class){
                echo $_POST['class'];
                echo "插入成功";
                $this->redirect('admin/classinfo/index');
            }
            else{
                echo $_POST['Class'];
                echo "插入失败";

                $this->redirect('admin/classinfo/index');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/classinfo/index');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院删除
     *****************************************/
    public function ClassDelete($ClassId=''){
        $Class=db('classinfo')->where('ClassId',$ClassId)->find();
        if($Class == null){
            $check_Class_del['flag']=0;
            $check_Class_del['mesg']='班级不存在';
            return $check_Class_del;

        }
        else{
            db('classinfo')->execute("delete from classinfo where ClassId = '$ClassId'");
            $check_Class_del['flag']=1;
            $check_Class_del['mesg']='删除成功';
            return $check_Class_del;
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院名称修改
     *****************************************/
    public function ClassUpdate($ClassId='',$ClassName=''){
        $Class=db('classinfo')->where('ClassId',$ClassId)->find();
        if($Class == null){
            $check_Class['flag']=0;
            $check_Class['mesg']='班级不存在';
//            echo "<script>alert('不存在');</script>";
//            $this->redirect('admin/classinfo/index');
            return $check_Class;
        }
        else{
            db('classinfo')->execute("update classinfo set ClassName='$ClassName' where ClassId='$ClassId'");
            $check_Class['flag']=1;
            $check_Class['mesg']='更新成功！';
            return $check_Class;
            $this->redirect('admin/classinfo/index');
        }

    }
}

