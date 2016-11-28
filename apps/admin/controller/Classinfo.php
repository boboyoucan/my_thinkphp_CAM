<?php
namespace app\admin\controller;
use think\Controller;
class Classinfo extends Controller
{
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：专业信息页面显示
     *****************************************/
    public function classinfo($page=1,$pagesize=5){
        //数据库总条数
        $count=db('classinfo')->query("select count(*) as count from classinfo");
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
     *方法：学院添加
     *****************************************/
    public function ClassAdd(){
        $Class=db('classinfo')->where('ClassName',$_POST['class'])->where('MId',$_POST['MId'])->find();
        if($Class == null){
            $db_Class=db('classinfo')->execute('insert into classinfo (MId,ClassName) values (:MajorId,:class)',['MajorId'=>$_POST['MId'],'class'=>$_POST['class']]);
            if($db_Class){
                echo $_POST['class'];
                echo "插入成功";
                $this->redirect('admin/classinfo/ClassInfo');
            }
            else{
                echo $_POST['Class'];
                echo "插入失败";

                $this->redirect('admin/classinfo/classinfo');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/classinfo/classinfo');
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
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/classinfo/classinfo');
        }
        else{
            db('classinfo')->execute("delete from classinfo where ClassId = '$ClassId'");
            $this->redirect('admin/classinfo/classinfo');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院名称修改
     *****************************************/
    public function ClassUpdate($ClassId=''){
        $Class=db('classinfo')->where('ClassId',$ClassId)->find();
        if($Class == null){
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/classinfo/classinfo');
        }
        else{
            db('classinfo')->execute("update classinfo set ClassName='{$_POST['Update_Class']}' where ClassId='$ClassId'");
            $this->redirect('admin/classinfo/classinfo');
        }

    }
}

