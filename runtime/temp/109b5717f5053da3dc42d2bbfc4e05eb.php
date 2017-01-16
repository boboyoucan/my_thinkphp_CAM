<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"/mnt/www/html/myphpweb/apps/admin/view/index/index.html";i:1481724633;s:24:"public/header/index.html";i:1484568712;s:23:"public/header/head.html";i:1481729668;}*/ ?>

<link href="/../public/static/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<link href="/../public/static/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

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
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="/../public/static/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="/../public/static/assets/layouts/layout/css/themes/light2.min.css" rel="stylesheet" type="text/css" id="style_color" />

<!-- END THEME LAYOUT STYLES -->

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
<script src="/../public/static/assets/global/scripts/addtable.js" type="text/javascript"></script>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>学生公寓管理系统->by wangbowen</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="/../public/static/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler"> </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="/../public/static/assets/layouts/layout/img/avatar3_small.jpg" />
                        <span class="username username-hide-on-mobile"> <?php echo \think\Session::get('name'); ?></span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="page_user_profile_1.html">
                                <i class="icon-user"></i> 个人信息 </a>
                        </li>

                        <!--<li>-->
                            <!--<a href="app_todo.html">-->
                                <!--<i class="icon-rocket"></i> My Tasks-->
                                <!--<span class="badge badge-success"> 7 </span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <li class="divider"> </li>
                        <!--<li>-->
                            <!--<a href="page_user_lock_1.html">-->
                                <!--<i class="icon-lock"></i> Lock Screen </a>-->
                        <!--</li>-->
                        <li>
                            <a href="<?php echo url('index/index/logout'); ?>">
                                <i class="icon-key"></i> 退出 </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
         <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler"> </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <?php if((\think\Session::get('type') == 3)): ?>
                <li class="nav-item start active open">
                    <a href="<?php echo url('student/index/index'); ?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">首页</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <?php else: ?>
                <li class="nav-item start active open">
                    <a href="<?php echo url('admin/index/index'); ?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">首页</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <?php endif; ?>

                <li class="heading">
                    <h3 class="uppercase">功能</h3>
                </li>
                <li class="nav-item  ">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">贵重物品管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/Valuablesinfo/index'); ?>" class="nav-link ">
                                <span class="title">贵重物品登记管理</span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/Valuablesinfo/ValuablesView'); ?>" class="nav-link nav-toggle">
                                <span class="title">贵重物品查看</span>
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-pointer"></i>
                        <span class="title">离校登记管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="maps_google.html" class="nav-link ">
                                <span class="title">Google Maps</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="maps_vector.html" class="nav-link ">
                                <span class="title">Vector Maps</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="maps_vector.html" class="nav-link nav-toggle">
                        <i class=" icon-wrench"></i>
                        <span class="title">报修信息管理</span>
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <?php if((\think\Session::get('type') == 0 OR \think\Session::get('type') == 1 OR \think\Session::get('type') == 2)): ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-layers"></i>
                        <span class="title">学校相关信息管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/academyinfo/index'); ?>" class="nav-link ">
                                <span class="title">学院信息</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/majorinfo/index'); ?>" class="nav-link ">
                                <span class="title">专业信息</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/classinfo/index'); ?>" class="nav-link ">
                                <span class="title">班级信息</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/dormitoryinfo/index'); ?>" class="nav-link ">
                                <span class="title">宿舍信息</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <?php endif; ?>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-puzzle"></i>
                        <span class="title">违规信息管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="components_date_time_pickers.html" class="nav-link ">
                                <span class="title">宿舍违规</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_color_pickers.html" class="nav-link ">
                                <span class="title">晚归</span>
                                <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                    </ul>
                </li>
             <?php if((\think\Session::get('type') == 0)): ?>
             <li class="nav-item  ">
                 <a href="javascript:;" class="nav-link nav-toggle">
                     <i class="icon-user"></i>
                     <span class="title">角色管理</span>
                     <span class="arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li class="nav-item  ">
                         <a href="components_date_time_pickers.html" class="nav-link ">
                             <span class="title">宿舍管理员信息</span>
                         </a>
                     </li>
                     <li class="nav-item  ">
                         <a href="components_color_pickers.html" class="nav-link ">
                             <span class="title">老师信息</span>
                             <span class="badge badge-danger">2</span>
                         </a>
                     </li>
                     <li class="nav-item  ">
                         <a href="components_color_pickers.html" class="nav-link ">
                             <span class="title">学生信息</span>
                             <span class="badge badge-danger">2</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <?php endif; ?>
            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">首页</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>概况</span>
        </li>
    </ul>
</div>
<h3 class="page-title"> 总体概况
    <small></small>
</h3>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1349">1349</span>
                </div>
                <div class="desc"> 新增报修 </div>
            </div>
            <a class="more" href="javascript:;"> 查看更多
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="12,5">12,5</span></div>
                <div class="desc"> 违规记录 </div>
            </div>
            <a class="more" href="javascript:;"> 查看更多
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="549">549</span>
                </div>
                <div class="desc"> 贵重物品登记 </div>
            </div>
            <a class="more" href="javascript:;"> 查看更多
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number"> +
                    <span data-counter="counterup" data-value="89">89</span>% </div>
                <div class="desc"> 离校登记 </div>
            </div>
            <a class="more" href="javascript:;"> 查看更多
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>



        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> <?php echo date('Y');?> &copy; 学生公寓管理系统 by wangbowen.
        <a href="http://weibo.com/u/3640108854" title="my weibo" target="_blank">我的微博</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>

</body>

</html>
<script src="/../public/static/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>