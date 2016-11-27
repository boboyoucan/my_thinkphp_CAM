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
        $majorinfo=db('majorinfo')->query("select * from majorinfo order by MajorId desc limit $startpage,$pagesize");
        $this->assign('majorinfo',$majorinfo);
        return $this->fetch('majorinfo/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院添加
     *****************************************/
    public function AcademyAdd(){
        $Academy=db('majorinfo')->where('AcademyName',$_POST['Academy'])->find();
        if($Academy == null){
            $db_Academy=db('majorinfo')->execute('insert into majorinfo (AcademyName) values (:Academy)',['Academy'=>$_POST['Academy']]);
            if($db_Academy){
                echo $_POST['Academy'];
                echo "插入成功";

                $this->redirect('admin/majorinfo/majorinfo');
            }
            else{
                echo $_POST['Academy'];
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
    public function AcademyDelete($AcademyId=''){
        $Academy=db('majorinfo')->where('AcademyId',$AcademyId)->find();
        if($Academy == null){
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/majorinfo/majorinfo');
        }
        else{
            db('majorinfo')->execute("delete from majorinfo where AcademyId = '$AcademyId'");
            $this->redirect('admin/majorinfo/majorinfo');
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月26日
     *方法：学院名称修改
     *****************************************/
    public function AcademyUpdate($AcademyId=''){
        $Academy=db('majorinfo')->where('AcademyId',$AcademyId)->find();
        if($Academy == null){
            echo "<script>alert('不存在');</script>";
            $this->redirect('admin/majorinfo/majorinfo');
        }
        else{
            db('majorinfo')->execute("update majorinfo set AcademyName='{$_POST['Update_Academy']}' where AcademyId='$AcademyId'");
            $this->redirect('admin/majorinfo/majorinfo');
        }

    }
}

