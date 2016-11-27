<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
        //return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
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

                $this->redirect('admin/index/academyinfo');
            }
            else{
                echo $_POST['Academy'];
                echo "插入失败";

                $this->redirect('admin/index/academyinfo');
            }
        }
        else{
            echo "<script>alert('不存在');</script>";

            $this->redirect('admin/index/academyinfo');
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
            $this->redirect('admin/index/academyinfo');
        }
        else{
            db('academyinfo')->query("delete from academyinfo where AcademyId = '$AcademyId'");
            $this->redirect('admin/index/academyinfo');
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
            $this->redirect('admin/index/academyinfo');
        }
        else{
            db('academyinfo')->query("update academyinfo set AcademyName='{$_POST['Update_Academy']}' where AcademyId=$AcademyId ");
            $this->redirect('admin/index/academyinfo');
        }

    }
}

