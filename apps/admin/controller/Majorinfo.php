<?php
namespace app\admin\controller;
use think\Controller;
class Majorinfo extends Controller
{
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：专业信息页面显示
     *****************************************/
    public function MajorInfo($page=1){
        //数据库总条数
        $count=db('majorinfo')->query("select count(*) as count from majorinfo");
        //一页显示的多少条
        $pagesize=4;
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
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
        $majorinfo=db('majorinfo')->query("select M.MajorId,M.AId,M.MajorName,A.AcademyName from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId order by MajorId desc limit $startpage,$pagesize");
        $this->assign('majorinfo',$majorinfo);
        return $this->fetch('majorinfo/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院添加
     *****************************************/
    public function MajorAdd(){
        $Major=db('majorinfo')->where('MajorName',$_POST['Major'])->find();
        if($Major == null){
            $db_Major=db('majorinfo')->execute('insert into majorinfo (AId,MajorName) values (:MajorId,:Major)',['MajorId'=>$_POST['AId'],'Major'=>$_POST['Major']]);
            if($db_Major){
                echo $_POST['Major'];
                echo "插入成功";

                $this->redirect('admin/majorinfo/majorinfo');
            }
            else{
                echo $_POST['Major'];
                echo "插入失败";

                $this->redirect('admin/majorinfo/majorinfo');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/majorinfo/majorinfo');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院删除
     *****************************************/
    public function MajorDelete($MajorId=''){
        $Major=db('majorinfo')->where('MajorId',$MajorId)->find();
        if($Major == null){
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/majorinfo/majorinfo');
        }
        else{
            db('majorinfo')->execute("delete from majorinfo where MajorId = '$MajorId'");
            $this->redirect('admin/majorinfo/majorinfo');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院名称修改
     *****************************************/
    public function MajorUpdate($MajorId=''){
        $Major=db('majorinfo')->where('MajorId',$MajorId)->find();
        if($Major == null){
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/majorinfo/majorinfo');
        }
        else{
            db('majorinfo')->execute("update majorinfo set MajorName='{$_POST['Update_Major']}' where MajorId='$MajorId'");
            $this->redirect('admin/majorinfo/majorinfo');
        }

    }
}

