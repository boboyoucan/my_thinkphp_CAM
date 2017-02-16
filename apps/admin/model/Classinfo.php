<?php
namespace app\admin\controller;
use think\Controller;
class Classinfo extends Common
{
    public function index(){
        $count=db('classinfo')->query("select count(*) as count from classinfo");
        $page=1;
        $pagesize=5;
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
        $classinfo=db('classinfo')->query("select C.ClassId,C.MId,C.ClassName,M.MajorName,A.AcademyName from classinfo as C JOIN majorinfo as M JOIN academyinfo as A where C.MId=M.MajorId and M.AId=A.AcademyId order by ClassId desc limit {$page_assign['pagestart']},$pagesize");
        $this->assign('classinfo',$classinfo);
        $this->assign('page_assign',$page_assign);
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
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);

        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
        if($ClassName ==''){
            $classinfo=db('classinfo')->query("select C.ClassId,C.MId,C.ClassName,M.MajorName,A.AcademyName from classinfo as C JOIN majorinfo as M JOIN academyinfo as A where C.MId=M.MajorId and M.AId=A.AcademyId order by ClassId desc limit {$page_assign['pagestart']},$pagesize");
        }else {
            $classinfo = db('classinfo')->query("select C.ClassId,C.MId,C.ClassName,M.MajorName,A.AcademyName from classinfo as C JOIN majorinfo as M JOIN academyinfo as A where C.MId=M.MajorId and M.AId=A.AcademyId and C.ClassName like '%$ClassName%' or C.MId=M.MajorId and M.AId=A.AcademyId and A.AcademyName like '%$ClassName%' or C.MId=M.MajorId and M.AId=A.AcademyId and M.MajorName like '%$ClassName%' order by ClassId desc limit {$page_assign['pagestart']},$pagesize");
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

