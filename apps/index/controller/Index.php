<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
//      老师和学生通用的标记
        $this->assign('common_nf','1');
        //传递学院信息
        $academyinfo=db('academyinfo')->query("select * from academyinfo order by AcademyId desc");
        $this->assign('academyinfo',$academyinfo);
        //传递宿舍信息
        $dormitoryinfo=db('dormitoryinfo')->query("select DormitoryId,Building,Unit,DormitoryNo from dormitoryinfo order by Building,Unit,DormitoryNo ASC");
        $this->assign('dormitoryinfo',$dormitoryinfo);
        return $this->fetch('index');
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

/*****************************************
 * 作者：王波文
 * 时间：2016年11月16日
 *方法：登录方法（包括学生登录，和管理员登录）
 *****************************************/
    public function login()
    {
//        获取post的值$_POST['username'];
//        $_POST['password'];
//        $_POST['remember'];
//        remember等于1表示登录类型为管理员
        if( isset($_POST['remember']) && $_POST['remember'] == 1 ){
            $db_admin=db('admininfo')
                ->where('AdminName',$_POST['username'])
                ->where('AdminPassword',$_POST['password'])
                ->find();
            if($db_admin == null){
                $this->assign('common_nf','0');
                return $this->fetch('index/index');
            }
            else{
                session('name',$db_admin['AdminName']);
                session('type',$db_admin['AdminType']);
                return $this->redirect('Admin/index/index');
               }
        }
//        remember没设置表示登录类型为学生
        else{
            $db_student=db('studentinfo')
                ->where('StudentNo',$_POST['username'])
                ->where('Password',$_POST['password'])
                ->find();
            if($db_student == null){
                $this->assign('common_nf','0');
                return $this->fetch('index/index');
                echo "用户不存在";
            }
            else{
                session('name',$db_student['StudentNo']);
                session('type','3');
                $this->assign('common_nf','1');
                echo "用户存在";
            }
        }

    }
}