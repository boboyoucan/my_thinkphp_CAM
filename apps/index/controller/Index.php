<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
//      老师和学生通用的标记
        $this->assign('common_nf','1');
        //忘记密码信息提示标志
        $common_forget['flag']=1;
        $common_forget['mes']='';
        $this->assign('common_forget',$common_forget);
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
                ->where('Password',md5($_POST['password']))
                ->find();
            if($db_student == null){
                $this->assign('common_nf','0');
                return $this->fetch('index/index');
                echo "用户不存在";
            }
            else{
                session('name',$db_student['StudentName']);
                session('type','3');
                $this->assign('common_nf','1');
                $this->redirect("admin/index/index");
                echo "用户存在";
            }
        }

    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年11月16日
     *方法：退出方法
     *****************************************/
    public function logout()
    {
        //清空session
        session('name',null);
        session('type',null);
        //退回登界面
        return $this->redirect('index/index');
    }
    /*****************************************
     * 作者：王波文
     * 时间：2016年12月13日
     *方法：注册方法（包括学生注册）
     *****************************************/
    public function register(){
        if($_POST){
            $db_student=db('studentinfo')->execute("insert into studentinfo (StudentNo, StudentName, Password, Sex, Nationality, Birthday, PhoneNo, Email, Valuables, DId, CId, EntranceTime, Role) values ('{$_POST['StudentNo']}','{$_POST['Name']}',md5({$_POST['Password']}),'{$_POST['Sex']}','{$_POST['Nationality']}','{$_POST['Birthday']}','{$_POST['PhoneNo']}','{$_POST['Email']}','{$_POST['Valuables']}','{$_POST['Dormitory']}','{$_POST['Class']}','{$_POST['EntranceTime']}','{$_POST['Role']}')");
            if($db_student){
                session('name',$_POST['Name']);
                session('type','3');
                $this->redirect("admin/index/index");
            }else{
                echo "注册失败";
            }
        }else{
            echo "非法访问";
        }
    }
    public function forget($email){
        $student=db('studentinfo')->query("select StudentName from studentinfo where Email='$email'");
        if($student){
            //生成随机验证码
            $yanz=rand(1000,9999);
            $headers = 'From: 西南林业大学宿舍公寓管理系统官方邮件<wbw@boboyoucan.cn>';
            $body = "尊敬的{$student[0]['StudentName']}您好！\n您的邮箱验证码为：$yanz";
            $subject = "邮箱验证";
            $to = "$email";
            if (mail($to, $subject, $body, $headers))
            {
                $common_forget['mes']='邮件发送成功';
                $this->assign('common_forget','$common_forget');
                return $common_forget;
                //return $this->fetch('index');
            }
            else
            {
                $common_forget['mes']='邮件发送失败';
                $this->assign('common_forget','$common_forget');
                return $common_forget;
            }
        }else{
            //没有注册，本邮件问测试邮件，督促注册
            $headers = 'From: 西南林业大学宿舍公寓管理系统官方邮件<wbw@boboyoucan.cn>';
            $body = "您好！\n您的邮箱暂时未关联我们的网站，本邮件为测试邮件，请先到我们的网站注册，网站地址：http://{$_SERVER['HTTP_HOST']}/index.php";
            $subject = "测试邮件";
            $to = "$email";
            if (mail($to, $subject, $body, $headers))
            {
                $common_forget['mes']='您尚未注册,我们已发送一封测试邮件给您，请先进行注册！!';
                $this->assign('common_forget','$common_forget');
                return $common_forget;
            }
            else
            {
                $common_forget['mes']='您尚未注册,我们本来准备发送一份测试邮件给您，但系统出现错误！请先进行注册！';
                $this->assign('common_forget','$common_forget');
                return $common_forget;
            }
        }
    }
}