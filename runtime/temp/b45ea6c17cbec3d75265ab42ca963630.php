<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"/mnt/www/html/myphpweb/apps/admin/view/academyinfo/index.html";i:1481446155;s:24:"public/header/index.html";i:1481553562;}*/ ?>

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
    <title>学生公寓管理系统->by wangbowen</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
     <link href="/../public/static/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/../public/static/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/../public/static/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/../public/static/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="/../public/static/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/../public/static/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/../public/static/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!--<link href="/../public/static/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />-->
    <link href="/../public/static/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!--<link href="/../public/static/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="/../public/static/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />-->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/../public/static/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/../public/static/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/../public/static/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/../public/static/assets/layouts/layout/css/themes/light2.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/../public/static/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
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
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default"> 7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>
                                <span class="bold">12 pending</span> notifications</h3>
                            <a href="page_user_profile_1.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-plus"></i>
                                                    </span> New user registered. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Server #12 overloaded. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 mins</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Server #2 not responding. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">14 hrs</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> Application error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">2 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Database overloaded 68%. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> A user IP blocked. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">4 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">5 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> System Error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">9 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Storage server failed. </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-default"> 4 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have
                                <span class="bold">7 New</span> Messages</h3>
                            <a href="app_inbox.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/../public/static/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                        <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/../public/static/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/../public/static/assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Bob Nilson </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                        <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/../public/static/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="/../public/static/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-calendar"></i>
                        <span class="badge badge-default"> 3 </span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li class="external">
                            <h3>You have
                                <span class="bold">12 pending</span> tasks</h3>
                            <a href="app_todo.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">New release v1.2 </span>
                                                    <span class="percent">30%</span>
                                                </span>
                                        <span class="progress">
                                                    <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </span>
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Application deployment</span>
                                                    <span class="percent">65%</span>
                                                </span>
                                        <span class="progress">
                                                    <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">65% Complete</span>
                                                    </span>
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Mobile app release</span>
                                                    <span class="percent">98%</span>
                                                </span>
                                        <span class="progress">
                                                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">98% Complete</span>
                                                    </span>
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Database migration</span>
                                                    <span class="percent">10%</span>
                                                </span>
                                        <span class="progress">
                                                    <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">10% Complete</span>
                                                    </span>
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Web server upgrade</span>
                                                    <span class="percent">58%</span>
                                                </span>
                                        <span class="progress">
                                                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">58% Complete</span>
                                                    </span>
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Mobile development</span>
                                                    <span class="percent">85%</span>
                                                </span>
                                        <span class="progress">
                                                    <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">85% Complete</span>
                                                    </span>
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">New UI release</span>
                                                    <span class="percent">38%</span>
                                                </span>
                                        <span class="progress progress-striped">
                                                    <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">38% Complete</span>
                                                    </span>
                                                </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN -->
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
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="app_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="app_inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox
                                <span class="badge badge-danger"> 3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="app_todo.html">
                                <i class="icon-rocket"></i> My Tasks
                                <span class="badge badge-success"> 7 </span>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="page_user_lock_1.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="page_user_login_1.html">
                                <i class="icon-key"></i> 退出 </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
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
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler"> </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="nav-item start active open">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">首页</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>

                </li>
                <li class="heading">
                    <h3 class="uppercase">功能</h3>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">贵重物品管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="ui_colors.html" class="nav-link ">
                                <span class="title">Color Library</span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">Page Progress Bar</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                </li>
                            </ul>
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
            <a href="<?php echo url('admin/academyinfo/academyinfo'); ?>">学校相关信息管理</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>学院信息</span>
        </li>
    </ul>
    <div class="page-toolbar">
        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
            <i class="icon-calendar"></i>&nbsp;
            <span class="thin uppercase hidden-xs">October 25, 2016 - November 23, 2016</span>&nbsp;
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
</div>



<div class="portlet light bordered">
    <div class="common-alert alert alert-danger display-hide" >
        <button class="close" data-close="alert"></button>
        <span>请填写学院名称</span>
    </div>
    <div class="error-alert_danger alert alert-danger display-hide" id="error_log_danger">

    </div>
    <div class="error-alert_warning alert alert-warning display-hide" id="error_log_warning">

    </div>

    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">学院信息表</span>
        </div>
        <div class="tools"> </div>
    </div>



    <div class="portlet-body">

        <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="dt-buttons">
                        <a class="dt-button buttons-print btn purple btn-outline" id="add" onclick="add_row()">
                            <span>添加</span>
                        </a>
                        <a class="dt-button buttons-print btn dark btn-outline" >
                            <span>打印</span>
                        </a>
                        <a class="dt-button buttons-copy buttons-flash btn red btn-outline" >
                            <span>复制</span>
                            <div style="position: absolute; left: 0px; top: 0px; width: 55px; height: 31px; z-index: 99;">
                                <embed id="ZeroClipboard_TableToolsMovie_1" src="//cdn.datatables.net/buttons/1.0.0/swf/flashExport.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="55" height="31" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=55&amp;height=31" wmode="transparent">
                            </div>
                        </a>
                        <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" >
                            <span>生成PDF</span>
                        </a>
                        <a class="dt-button buttons-excel buttons-flash btn yellow btn-outline" >
                            <span>生成Excel</span>
                            <div style="position: absolute; left: 0px; top: 0px; width: 55px; height: 31px; z-index: 99;">
                                <embed id="ZeroClipboard_TableToolsMovie_2" src="//cdn.datatables.net/buttons/1.0.0/swf/flashExport.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="55" height="31" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=55&amp;height=31" wmode="transparent">
                            </div>
                        </a>
                        <a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" >
                            <span>生成CSV</span>
                        </a>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="dataTables_length" id="sample_1_length">
                        <label>
                            <select name="select_page" onchange="select_page('','')" id="select_page" class="form-control input-sm input-xsmall input-inline">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="-1">All</option>
                            </select> 行
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div id="sample_1_filter" class="dataTables_filter">
                        <label>
                            <!--<form action="<?php echo url('admin/academyinfo/academyinfo'); ?>" method="post">-->
                            <input type="search" class="form-control input-sm input-small input-inline" id="AcademyName" name="AcademyName" placeholder="请输入学院名称" aria-controls="sample_1">
                            <button class="btn" id="find" onclick="search_an()">搜索</button>
                            <!--</form>-->
                        </label>
                    </div>
                </div>
            </div>

            <div class="table-scrollable">
                <table class="table">
                    <thead>
                    <tr role="row">
                        <th class="sorting_desc" style="width: 163px;" >
                            学院名称
                        </th>
                        <th class="sorting" style="width: 205px;">
                            操作
                        </th>

                    </tr>
                    </thead>
                    <tr role="row" id="add_tr" style="display: none">
                        <form action="<?php echo url('admin/academyinfo/AcademyAdd'); ?>" method="post">
                            <td class="sorting_1 form-group">
                                <input type="text" id="add_input" name="Academy" class="form-control input-small" value="">
                            </td>
                            <td>
                                <button id="save" type="submit" class="dt-button buttons-print btn green btn-outline">
                                    <span>保存</span>
                                </button>
                                <a id="cancel" class="dt-button buttons-print btn red btn-outline">
                                    <span>取消</span>
                                </a>
                            </td>
                        </form>
                    </tr>
                    <tbody id="Academy_row">
                        <?php if(is_array($academyinfo) || $academyinfo instanceof \think\Collection): $i = 0; $__LIST__ = $academyinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <!--<form action="<?php echo url('admin/academyinfo/AcademyUpdate'); ?>?AcademyId=<?php echo $vo['AcademyId']; ?>" method="post">-->
                        <tr role="row" class="even" >
                            <td id="td_row_<?php echo $vo['AcademyId']; ?>">
                                <?php echo $vo['AcademyName']; ?>
                            </td>
                            <!--默认隐藏 更新时显示input标签-->
                            <td id="td_update_row_<?php echo $vo['AcademyId']; ?>" style="display:none">
                                <input type="text" id="update_input" class="form-control input-small" name="Update_Academy" value="<?php echo $vo['AcademyName']; ?>">
                            </td>
                            <td>
                                <!--默认隐藏 更新时显示按钮-->
                                <button id="update_save_button_<?php echo $vo['AcademyId']; ?>" onclick="save_change('<?php echo $vo['AcademyId']; ?>')" class="dt-button buttons-print btn green btn-outline" style="display: none" >
                                    <span>保存</span>
                                </button>
                                <a id="update_cal_button_<?php echo $vo['AcademyId']; ?>"class="dt-button buttons-print btn red btn-outline" style="display:none" onclick="cancel('<?php echo $vo['AcademyId']; ?>')" >
                                    <span>取消</span>
                                </a>
                            <!--默认隐藏-->
                                <a id="update_button_<?php echo $vo['AcademyId']; ?>" class="dt-button buttons-print btn green btn-outline" onclick="change('<?php echo $vo['AcademyId']; ?>')">
                                    <span>更新</span>
                                </a>
                                <a id="delete_button_<?php echo $vo['AcademyId']; ?>" class="dt-button buttons-print btn red btn-outline" onclick="Delete('<?php echo $vo['AcademyId']; ?>')"  >
                                    <!--href="<?php echo url('admin/academyinfo/AcademyDelete'); ?>?AcademyId=<?php echo $vo['AcademyId']; ?>"-->
                                    <span>删除</span>
                                </a>
                            </td>
                        </tr>
                            <!--</form>-->
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="dataTables_info" role="status" aria-live="polite" id="page_all" >
                        <?php echo $page_assign['page_all']; ?>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="dataTables_paginate paging_bootstrap_number" id="paging" >
                        <?php echo $page_assign['page_content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    /*
    *添加按钮事件
    */
    function add_row(){
        var add_tr=document.getElementById("add_tr");
        add_tr.style.display='';
    }
    /*
     * 页码显示函数
     */
    //获取select对象
    var se = document.getElementById("select_page");
    //选择页码及页面一页显示行数
    function select_page(page,pagesize) {
        var select_page_v=se.value;
        if(page =='' && pagesize==''){
            //定义一夜显示多少条
            var search=document.getElementById("AcademyName").value;
            if(search ==''){
                data_trans={pagesize:select_page_v};
            }else{
                data_trans={pagesize:select_page_v,AcademyName:search};
            }
        }else{
            data_trans={pagesize:pagesize,page:page};
        }
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/academyinfo/academyinfo'); ?>",
            dataType:"json",
            data: data_trans,
            timeout:30000,
            error:function(){
                alert("出错");
            },
            success:function(data){
                $("#Academy_row").empty();
                var count = data.length;
                var i = 0;
                var b="";
                 for(i=0;i<count;i++){
                    //数据
                     b+="<tr role='row' class='even'><td id='td_row_"+data[i].AcademyId+"'>"+data[i].AcademyName+"</td>"
                    //操作按钮
                     b+="<td id='td_update_row_"+data[i].AcademyId+"' style='display:none'><input type='text' id='update_input' class='form-control input-small' name='Update_Academy' value='"+data[i].AcademyName+"'></td><td><!--默认隐藏 更新时显示按钮--><button id='update_save_button_"+data[i].AcademyId+"' onclick='save_change("+data[i].AcademyId+")' class='dt-button buttons-print btn green btn-outline' style='display: none' href='' ><span>保存</span></button><a id='update_cal_button_"+data[i].AcademyId+"'class='dt-button buttons-print btn red btn-outline' style='display:none' onclick='cancel("+data[i].AcademyId+")' ><span>取消</span></a><!--默认隐藏--><a id='update_button_"+data[i].AcademyId+"' class='dt-button buttons-print btn green btn-outline' onclick='change("+data[i].AcademyId+")'><span>更新</span></a><a id='delete_button_"+data[i].AcademyId+"' class='dt-button buttons-print btn red btn-outline' onclick='Delete("+data[i].AcademyId+")'><span>删除</span></a></td></tr>"
                }
                //从新加载数据
                $("#Academy_row").append(b);
                //清空页码显示div
                $("#paging").empty();
                //重新加载页码div
                $("#paging").append(data[0].paging);
                //清空总页码
                $("#page_all").empty();
                //重新加载总页码div
                $("#page_all").append(data[0].pageall);
            }
        });
    }
    //点击搜索动作
    function search_an() {
        select_page('','');
    }
    /**
     * 更新处理函数
     */
    function save_change(AcademyId) {
        var AcademyName =document.getElementById('update_input').value;
        //alert(AcademyName);
        data_trans={AcademyId:AcademyId,AcademyName:AcademyName};
        $.ajax({
            cache:false,
            type:"POST",
            url:"<?php echo url('admin/academyinfo/AcademyUpdate'); ?>",
            dataType:"json",
            data: data_trans,
            timeout:30000,
            error:function(){
                alert("系统出错，请联系我们！");
            },
            success:function(data){
                select_page('','');
                var m="";
                //显示更新成功对话框
                if(data.flag ==1){
                    $("#error_log_warning").empty();
                    m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                    $("#error_log_warning").append(m);
                    $(".error-alert_warning").show(100);
                }
                //显示更新失败对话框
                else{
                    $("#error_log_danger").empty();
                    m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                    $("#error_log_danger").append(m);
                    $(".error-alert_danger").show(100);
                }
            }


        });
    }

    /*
    *删除方法
     */
    function Delete(AcademyId) {
        if(confirm("此操作不可逆，您真的要删除吗？")){
            data_trans={AcademyId:AcademyId};
            //alert(AcademyId);
            $.ajax({
                cache:false,
                type:"POST",
                url:"<?php echo url('admin/academyinfo/AcademyDelete'); ?>",
                dataType:"json",
                data: data_trans,
                timeout:30000,
                error:function(){
                    alert("系统出错，请联系我们！");
                },
                success:function(data){
                    select_page('','');
                    var m="";
                    //显示更新成功对话框
                    if(data.flag ==1){
                        $("#error_log_warning").empty();
                        m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                        $("#error_log_warning").append(m);
                        $(".error-alert_warning").show(100);
                    }
                    //显示更新失败对话框
                    else{
                        $("#error_log_danger").empty();
                        m+="<button class='close' type='button'  data-close='alert'></button><span>"+data.mesg+"</span>"
                        $("#error_log_danger").append(m);
                        $(".error-alert_danger").show(100);
                    }
                }


            });
        }
    }
</script>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
        <div class="page-quick-sidebar">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                        <span class="badge badge-success">7</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-bell"></i> Alerts </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-info"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-speech"></i> Activities </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-settings"></i> Settings </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                    <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                        <h3 class="list-heading">Staff</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">8</span>
                                </div>
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar3.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Bob Nilson</h4>
                                    <div class="media-heading-sub"> Project Manager </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar1.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Nick Larson</h4>
                                    <div class="media-heading-sub"> Art Director </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">3</span>
                                </div>
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar4.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Hubert</h4>
                                    <div class="media-heading-sub"> CTO </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar2.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ella Wong</h4>
                                    <div class="media-heading-sub"> CEO </div>
                                </div>
                            </li>
                        </ul>
                        <h3 class="list-heading">Customers</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-warning">2</span>
                                </div>
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar6.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lara Kunis</h4>
                                    <div class="media-heading-sub"> CEO, Loop Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="label label-sm label-success">new</span>
                                </div>
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar7.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ernie Kyllonen</h4>
                                    <div class="media-heading-sub"> Project Manager,
                                        <br> SmartBizz PTL </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar8.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lisa Stone</h4>
                                    <div class="media-heading-sub"> CTO, Keort Inc </div>
                                    <div class="media-heading-small"> Last seen 13:10 PM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">7</span>
                                </div>
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar9.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Portalatin</h4>
                                    <div class="media-heading-sub"> CFO, H&D LTD </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar10.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Irina Savikova</h4>
                                    <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">4</span>
                                </div>
                                <img class="media-object" src="/../public/static/assets/layouts/layout/img/avatar11.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Maria Gomez</h4>
                                    <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="page-quick-sidebar-item">
                        <div class="page-quick-sidebar-chat-user">
                            <div class="page-quick-sidebar-nav">
                                <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                    <i class="icon-arrow-left"></i>Back</a>
                            </div>
                            <div class="page-quick-sidebar-chat-user-messages">
                                <div class="post out">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> When could you send me the report ? </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Its almost done. I will be sending it shortly </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Alright. Thanks! :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:16</span>
                                        <span class="body"> You are most welcome. Sorry for the delay. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> No probs. Just take your time :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Alright. I just emailed it to you. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Great! Thanks. Will check it right away. </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Please let me know if you have any comment. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="/../public/static/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="page-quick-sidebar-chat-user-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type a message here...">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn green">
                                            <i class="icon-paper-clip"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                    <div class="page-quick-sidebar-alerts-list">
                        <h3 class="list-heading">General</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-warning"> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <h3 class="list-heading">System</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-default "> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                    <div class="page-quick-sidebar-settings-list">
                        <h3 class="list-heading">General Settings</h3>
                        <ul class="list-items borderless">
                            <li> Enable Notifications
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Allow Tracking
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Log Errors
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Auto Sumbit Issues
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Enable SMS Alerts
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <h3 class="list-heading">System Settings</h3>
                        <ul class="list-items borderless">
                            <li> Security Level
                                <select class="form-control input-inline input-sm input-small">
                                    <option value="1">Normal</option>
                                    <option value="2" selected>Medium</option>
                                    <option value="e">High</option>
                                </select>
                            </li>
                            <li> Failed Email Attempts
                                <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                            <li> Secondary SMTP Port
                                <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                            <li> Notify On System Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Notify On SMTP Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <div class="inner-content">
                            <button class="btn btn-success">
                                <i class="icon-settings"></i> Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
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
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="/../public/static/assets/global/plugins/respond.min.js"></script>
<script src="/../public/static/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
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
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>-->
<!--<script src="/../public/static/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>-->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->


<script src="/../public/static/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/../public/static/assets/global/scripts/datatable.js" type="text/javascript"></script>

<script src="/../public/static/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/global/scripts/addtable.js" type="text/javascript"></script>
<!-- BEGIN THEME LAYOUT SCRIPTS -->


<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="/../public/static/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/../public/static/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>