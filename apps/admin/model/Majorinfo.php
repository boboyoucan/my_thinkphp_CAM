<?php
namespace app\admin\controller;
use think\Controller;
class Majorinfo extends Common
{
    public function index(){
        $page=1;
        $pagesize=5;
        $count=db('majorinfo')->query("select count(*) as count from majorinfo");
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
        $majorinfo=db('majorinfo')->query("select M.MajorId,M.AId,M.MajorName,A.AcademyName from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId order by MajorId desc limit {$page_assign['pagestart']},$pagesize");
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
        //调用公共方法的分页算法 $count:总数;$page:第几页；$pagesize:每页显示的条数
        $page_assign=$this->paging($count,$page,$pagesize);
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
        if($Name != ''){
            $majorinfo=db('majorinfo')->query("select M.MajorId,M.AId,M.MajorName,A.AcademyName from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId and M.MajorName like '%$Name%' or M.AId=A.AcademyId and A.AcademyName like '%$Name%' order by MajorId desc limit {$page_assign['pagestart']},$pagesize");
        }else{
            $majorinfo=db('majorinfo')->query("select M.MajorId,M.AId,M.MajorName,A.AcademyName from majorinfo as M JOIN academyinfo as A where M.AId=A.AcademyId order by MajorId desc limit {$page_assign['pagestart']},$pagesize");
        }
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

