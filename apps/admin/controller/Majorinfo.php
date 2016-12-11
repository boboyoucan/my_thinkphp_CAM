<?php
namespace app\admin\controller;
use think\Controller;
class Majorinfo extends Controller
{

    public function index(){
        $page=1;
        $pagesize=5;
        $count=db('majorinfo')->query("select count(*) as count from majorinfo");
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
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
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
        $majorinfo=db('majorinfo')->query("select M.MajorId,M.AId,M.MajorName,A.AcademyName from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId order by MajorId desc limit $startpage,$pagesize");
        $this->assign('majorinfo',$majorinfo);
        $this->assign('page_assign',$page_assign);
        return $this->fetch('majorinfo/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：专业信息页面显示
     *****************************************/
    public function majorinfo($page=1,$pagesize=5,$Name=''){
        //数据库总条数
        if($Name != ''){
            $count=db('majorinfo')->query("select count(*) as count from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId and M.MajorName like '%$Name%' or M.AId=A.AcademyId and A.AcademyName like '%$Name%'");
        }else{
            $count=db('majorinfo')->query("select count(*) as count from majorinfo");
        }
        //一页显示的多少条
        //$pagesize=4;
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
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
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
        if($Name != ''){
            $majorinfo=db('majorinfo')->query("select M.MajorId,M.AId,M.MajorName,A.AcademyName from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId and M.MajorName like '%$Name%' or M.AId=A.AcademyId and A.AcademyName like '%$Name%' order by MajorId desc limit $startpage,$pagesize");
        }else{
            $majorinfo=db('majorinfo')->query("select M.MajorId,M.AId,M.MajorName,A.AcademyName from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId order by MajorId desc limit $startpage,$pagesize");
        }
        //$this->assign('majorinfo',$majorinfo);
        $this->assign('page_assign',$page_assign);
        $paging=$page_assign['page_content'];
        $majorinfo[0]['paging']=$paging;
        $majorinfo[0]['pageall']=$page_assign['page_all'];
        return $majorinfo;
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：专业添加
     *****************************************/
    public function MajorAdd(){
        $Major=db('majorinfo')->where('MajorName',$_POST['Major'])->find();
        if($Major == null){
            $db_Major=db('majorinfo')->execute('insert into majorinfo (AId,MajorName) values (:MajorId,:Major)',['MajorId'=>$_POST['AId'],'Major'=>$_POST['Major']]);
            if($db_Major){
                echo $_POST['Major'];
                echo "插入成功";

                $this->redirect('admin/majorinfo/index');
            }
            else{
                echo $_POST['Major'];
                echo "插入失败";

                $this->redirect('admin/majorinfo/index');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/majorinfo/index');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：专业删除
     *****************************************/
    public function MajorDelete($MajorId=''){
        $Major=db('majorinfo')->where('MajorId',$MajorId)->find();
        if($Major == null){
            $check_Major_del['flag']=0;
            $check_Major_del['mesg']='要删除的专业不存在';
            return $check_Major_del;
        }
        else{
            db('majorinfo')->execute("delete from majorinfo where MajorId = '$MajorId'");
            $check_Major_del['flag']=1;
            $check_Major_del['mesg']='删除成功！';
            return $check_Major_del;
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：专业名称修改
     *****************************************/
    public function MajorUpdate($MajorId='',$MajorName=''){
        $Major=db('majorinfo')->where('MajorId',$MajorId)->find();
        if($Major == null){
            $check_Major['flag']=0;
            $check_Major['mesg']='专业不存在';
            $this->assign('check_Academy',$check_Major);
            return $check_Major;
//            echo "<script>alert('不存在');</script>";
//            $this->redirect('admin/majorinfo/index');
        }
        else{

            db('majorinfo')->execute("update majorinfo set MajorName='$MajorName' where MajorId='$MajorId'");
            $check_Major['flag']=1;
            $check_Major['mesg']='更新成功！';
            return $check_Major;
//            $this->redirect('admin/majorinfo/index');
        }

    }
}

