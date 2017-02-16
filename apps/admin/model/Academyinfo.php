<?php
namespace apps\admin\model;

use think\Config;
use think\Db;
use think\Loader;
use think\Model;

class Academyinfo extends Common
{
    public function index(){
        //数据库总条数
        $count=db('academyinfo')->query("select count(*) as count from academyinfo ");
        $page=1;
        //一页显示的多少条
        $pagesize=5;
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);
        $sql="select * from academyinfo order by AcademyId desc limit {$page_assign['pagestart']},$pagesize";
        $academyinfo=db('academyinfo')->query($sql);
        $this->assign('academyinfo',$academyinfo);
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
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);
        if($AcademyName != ''){
            $sql="select * from academyinfo where AcademyName like '%$AcademyName%' order by AcademyId desc limit {$page_assign['pagestart']},$pagesize";
        }else{
            $sql="select * from academyinfo order by AcademyId desc limit {$page_assign['pagestart']},$pagesize";
        }
        $academyinfo=db('academyinfo')->query($sql);
        $paging=$page_assign['page_content'];
        $academyinfo[0]['paging']=$paging;
        $academyinfo[0]['pageall']=$page_assign['page_all'];
        return $academyinfo;
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
     * 方法：学院删除
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
