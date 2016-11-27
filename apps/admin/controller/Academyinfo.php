<?php
namespace app\admin\controller;
use think\Controller;
class Academyinfo extends Controller
{
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院信息页面显示
     *****************************************/
    public function academyinfo($page=1){
        //数据库总条数
        $count=db('academyinfo')->query("select count(*) as count from academyinfo");
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
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc limit $startpage,$pagesize");
        $this->assign('academyinfo',$academyinfo);
        return $this->fetch('academyinfo/index');
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

                $this->redirect('admin/academyinfo/academyinfo');
            }
            else{
                echo $_POST['Academy'];
                echo "插入失败";

                $this->redirect('admin/academyinfo/academyinfo');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/academyinfo/academyinfo');
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
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/academyinfo/academyinfo');
        }
        else{
            db('academyinfo')->execute("delete from academyinfo where AcademyId = '$AcademyId'");
            $this->redirect('admin/academyinfo/academyinfo');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院名称修改
     *****************************************/
    public function AcademyUpdate($AcademyId=''){
        $Academy=db('academyinfo')->where('AcademyId',$AcademyId)->find();
        if($Academy == null){
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/academyinfo/academyinfo');
        }
        else{
            db('academyinfo')->execute("update academyinfo set AcademyName='{$_POST['Update_Academy']}' where AcademyId='$AcademyId'");
            $this->redirect('admin/academyinfo/academyinfo');
        }

    }
}

