<?php
namespace app\admin\controller;
use think\Controller;
class Academyinfo extends Checklogin
{
    public function index(){

        //数据库总条数
        $count=db('academyinfo')->query("select count(*) as count from academyinfo ");
        $page=1;
        //一页显示的多少条
        $pagesize=5;
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
        $sql="select * from academyinfo order by AcademyId desc limit $startpage,$pagesize";
        $academyinfo=db('academyinfo')->query($sql);
        $this->assign('academyinfo',$academyinfo);
        //拼接页码的html代码
        $page_assign['page_content']="<ul class='pagination' style='visibility: visible;'>";
        //判断是不是第一页
        if($page_assign['page'] ==1 ){
            $page_assign['page_content']=$page_assign['page_content']."  <li class='prev disabled' ><a href='#' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";
        }else{
            $page_assign['page_content']=$page_assign['page_content']." <li class='prev' ><a onclick='select_page(1,{$page_assign['pagesize']})' title='Prev' style='height: 33px'><i class='fa fa-angle-left'></i></a></li>";

        }
        //循环输出页码
        for($i=1;$i<=$page_assign['pagemax'];$i++){
            if($i == $page_assign['page']){
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i} active' id='page_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";

            }else{
                $page_assign['page_content']=$page_assign['page_content']."<li class='pages_{$i}'><a onclick='select_page({$i},{$page_assign['pagesize']})'>{$i}</a></li>";

            }
        }
        //判断是不是最后一页
        if($page_assign['page'] ==$page_assign['pagemax'] ){
            $page_assign['page_content']=$page_assign['page_content']."<li class='next disabled'><a  title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";

        }else{
            $page_assign['page_content']=$page_assign['page_content']."<li class='next'><a onclick='select_page({$page_assign['pagemax']},{$page_assign['pagesize']})' title='Next' style='height: 33px'><i class='fa fa-angle-right'></i></a></li>";
        }
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
        return $this->fetch('academyinfo/index');
    }

     /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院信息页面显示
     *****************************************/
    public function academyinfo($page=1, $pagesize=5,$AcademyName=''){
        //数据库总条数
        if($AcademyName != ''){
            $count=db('academyinfo')->query("select count(*) as count from academyinfo where AcademyName like '%$AcademyName%'");
        }else{
            $count=db('academyinfo')->query("select count(*) as count from academyinfo ");
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
        if($AcademyName != ''){
            $sql="select * from academyinfo where AcademyName like '%$AcademyName%' order by AcademyId desc limit $startpage,$pagesize";
        }else{
            $sql="select * from academyinfo order by AcademyId desc limit $startpage,$pagesize";
        }
        $academyinfo=db('academyinfo')->query($sql);
        $paging=$page_assign['page_content'];
        $academyinfo[0]['paging']=$paging;
        $academyinfo[0]['pageall']=$page_assign['page_all'];
        return $academyinfo;

        //$this->assign('academyinfo',$academyinfo);

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院添加
     *****************************************/
    public function AcademyAdd(){
        $Academy=db('academyinfo')->where('AcademyName',$_POST['Academy'])->find();
        if($Academy == null){
            $db_Academy=db('academyinfo')->execute('insert into academyinfo (AcademyName) values (:Academy)',['Academy'=>$_POST['Academy']]);
            if($db_Academy){
                echo $_POST['Academy'];
                echo "插入成功";
                $this->redirect('admin/academyinfo/index');
            }
            else{
                echo $_POST['Academy'];
                echo "插入失败";

                $this->redirect('admin/academyinfo/index');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/academyinfo/index');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院删除
     *****************************************/
    public function AcademyDelete($AcademyId=''){
        $Academy=db('academyinfo')->where('AcademyId',$AcademyId)->find();
        if($Academy == null){
            $check_Academy_del['flag']=0;
            $check_Academy_del['mesg']='删除的学院不存在';
            return $check_Academy_del;
//            echo "<script>alert('不存在');</script>";
//            $this->redirect('admin/academyinfo/index');
        }
        else{
            db('academyinfo')->execute("delete from academyinfo where AcademyId = '$AcademyId'");
            $check_Academy_del['flag']=1;
            $check_Academy_del['mesg']='删除成功！';
            return $check_Academy_del;
//            $this->redirect('admin/academyinfo/index');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院名称修改
     *****************************************/
    public function AcademyUpdate($AcademyId='', $AcademyName=''){
        $Academy=db('academyinfo')->where('AcademyId',$AcademyId)->find();
        if($Academy == null){
            //判断是否存在的标志
            $check_Academy['flag']=0;
            $check_Academy['mesg']='学院不存在';
            $this->assign('check_Academy',$check_Academy);
            return $check_Academy;
        }
        else{
            db('academyinfo')->execute("update academyinfo set AcademyName='$AcademyName' where AcademyId='$AcademyId'");
            //判断是否存在的标志
            $check_Academy['flag']=1;
            $check_Academy['mesg']='更新成功!';
            return $check_Academy;
        }

    }
}
