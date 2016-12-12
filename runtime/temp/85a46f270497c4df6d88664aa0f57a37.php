<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"/mnt/www/html/myphpweb/apps/index/view/index/index.html";i:1481557505;s:23:"public/header/head.html";i:1480224824;}*/ ?>

<link href="/../public/static/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="/../public/static/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="/../public/static/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="/../public/static/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/../public/static/assets/pages/css/login-4.css" rel="stylesheet" type="text/css" />



<!--[if lt IE 9]-->
<script src="/../public/static/assets/global/plugins/respond.min.js"></script>
<script src="/../public/static/assets/global/plugins/excanvas.min.js"></script>
<!--[endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/../public/static/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/../public/static/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/../public/static/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/pages/scripts/login-4.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>高校公寓管理系统->by wbw</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="/../public/static/assets/pages/img/logo-big.png" alt="" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="<?php echo url('index/login'); ?>" method="post">
        <h3 class="form-title">请输入账号登录</h3>
        <div class="login-alert alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> 请输入用户名和密码. </span>
        </div>
        <input id="common_check" type="hidden" value="<?php echo $common_nf; ?>"/>
        <div class="common-alert alert alert-danger display-hide" >
            <button class="close" data-close="alert"></button>
            <span> 用户名或密码错误. </span>
        </div>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">用户名/学号</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="用户名/学号" name="username" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="密码" name="password" /> </div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1" /> 管理员登录 </label>
            <button type="submit" class="btn green pull-right"> 登录 </button>
        </div>
        <div class="forget-password">
            <h4>忘记登录密码 ?</h4>
            <p> 不用担心, 点击
                <a href="javascript:;" id="forget-password"> 这里 </a> 重置密码. </p>
        </div>
        <div class="create-account">
            <p> 还没有账号 ?&nbsp;
                <a href="javascript:;" id="register-btn"> 注册 </a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="index.html" method="post">
        <h3>忘记密码 ?</h3>
        <p> 请输入邮箱地址. </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn red btn-outline">返回 </button>
            <button type="submit" class="btn green pull-right"> 提交 </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="index.html" method="post">
        <h3>注册</h3>
        <p> 在下方输入您的个人信息进行注册： </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">姓名</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="姓名" name="name" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">性别</label>
            <div class="input-icon">
                <i class="fa fa-odnoklassniki"></i>
                <select name="sex" id="sex_list" class="select2 form-control">
                    <option value="">选择性别</option>
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">民族</label>
            <div class="input-icon">
                <i class="fa fa-user-secret"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="民族" name="Nationality" /> </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">生日</label>
            <div class="input-icon">
                <i class="fa fa-calendar-check-o"></i>
                <input class="form-control placeholder-no-fix" type="text" onfocus="(this.type='date')" placeholder="生日" name="Birthday" /></div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">电话</label>
            <div class="input-icon">
                <i class="fa fa-phone"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="电话" name="PhoneNo" /> </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">邮箱</label>
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="邮箱" name="email" /> </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">贵重物品</label>
            <div class="input-icon">
                <i class="fa fa-cubes"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="贵重物品" name="Valuables" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">宿舍</label>
            <div class="input-icon">
                <i class="fa fa-institution"></i>
                <select name="dormitory" id="dormitory_list" class="select2 form-control">
                    <option value="">选择宿舍</option>
                    <?php if(is_array($dormitoryinfo) || $dormitoryinfo instanceof \think\Collection): $i = 0; $__LIST__ = $dormitoryinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['Unit'] == ''): ?>
                    <option value="<?php echo $vo['DormitoryId']; ?>"><?php echo $vo['Building']; ?>栋<?php echo $vo['DormitoryNo']; ?>室</option>
                    <?php else: ?>
                    <option value="<?php echo $vo['DormitoryId']; ?>"><?php echo $vo['Building']; ?>栋<?php echo $vo['Unit']; ?>单元<?php echo $vo['DormitoryNo']; ?>室</option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">学院</label>
            <div class="input-icon">
                <i class="fa fa-mortar-board"></i>
                <select name="academy" id="academy_list" class="select2 form-control" onchange="chage_Major()" >
                    <option value="">选择学院</option>
                    <?php if(is_array($academyinfo) || $academyinfo instanceof \think\Collection): $i = 0; $__LIST__ = $academyinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['AcademyId']; ?>"><?php echo $vo['AcademyName']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">专业</label>
            <div class="input-icon">
                <i class="fa fa-mortar-board"></i>
                <select name="major" id="major_list" class="select2 form-control" onchange="chage_Class()">
                    <option value="">选择专业</option>
                </select></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">班级</label>
            <div class="input-icon">
                <i class="fa fa-mortar-board"></i>
                <select name="class" id="class_list" class="select2 form-control">
                    <option value="">选择班级</option>
                </select></div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">入学时间</label>
            <div class="input-icon">
                <i class="fa fa-calendar-check-o"></i>
                <input class="form-control placeholder-no-fix" type="text" onfocus="(this.type='date')"  placeholder="入学时间" name="EntranceTime" /> </div>
        </div>
        <p> 输入您的登录用户信息: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">学号</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="学号" name="StudentNo" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="Password" placeholder="密码" id="Password" name="Password" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">再次输入密码</label>
            <div class="controls">
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="再次输入密码" name="rpassword" /> </div>
            </div>
        </div>
        <div class="form-actions">
            <button id="register-back-btn" type="button" class="btn red btn-outline"> 返回 </button>
            <button type="submit" id="register-submit-btn" class="btn green pull-right"> 注册 </button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright"> 2016 &copy; wangbowen - 高校公寓管理系统. </div>
</body>

</html>
<script>
    /**
     * 选择学院时触发学院对应的专业
     */
    function chage_Major() {
        var academy=document.getElementById("academy_list").value;
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/common/MajorInfo'); ?>?academy="+academy,
            dataType:"json",
            data:['academy','$academy'],
            timeout:30000,
            error:function(){
                alert('admin/Common/MajorInfo?academy='+academy);
            },
            success:function(data){
                $("#major_list").empty();
                var count = data.length;
//            alert(count);
                var i = 0;
                var b="<option value=''>选择专业</option>";
                for(i=0;i<count;i++){
                    b+="<option value='"+data[i].MajorId+"'>"+data[i].MajorName+"</option>";
                }
                $("#major_list").append(b);
            }
        });
    }
    function chage_Class() {

        var major=document.getElementById("major_list").value;
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/common/ClassInfo'); ?>?major="+major,
            dataType:"json",
            data:{'major':major},
            timeout:30000,
            error:function(){
                alert('admin/Common/MajorInfo?academy='+major);
            },
            success:function(data){
                $("#class_list").empty();
                var count = data.length;
//            alert(count);
                var i = 0;
                var b="<option value=''>选择班级</option>";
                for(i=0;i<count;i++){
                    b+="<option value='"+data[i].ClassId+"'>"+data[i].ClassName+"</option>";
                }
                $("#class_list").append(b);
            }
        });
    }
</script>

