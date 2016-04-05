
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
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
        <title>Metronic | User Profile 2</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <?php 
        echo link_tag('assets/global/plugins/font-awesome/css/font-awesome.min.css');
        echo link_tag('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');
        echo link_tag('assets/global/plugins/bootstrap/css/bootstrap.min.css');
        echo link_tag('assets/global/plugins/uniform/css/uniform.default.css');
        echo link_tag('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');
        // <!-- END GLOBAL MANDATORY STYLES -->
        // <!-- BEGIN PAGE LEVEL PLUGINS -->
        echo link_tag('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');
        // <!-- END PAGE LEVEL PLUGINS -->
        // <!-- BEGIN THEME GLOBAL STYLES -->
        echo link_tag('assets/global/css/components-md.min.css');
        echo link_tag('assets/global/css/plugins-md.min.css');
        // <!-- END THEME GLOBAL STYLES -->
        // <!-- BEGIN PAGE LEVEL STYLES -->
        echo script_tag('assets/pages/css/profile-2.min.css');
        // <!-- END PAGE LEVEL STYLES -->
        // <!-- BEGIN THEME LAYOUT STYLES -->
        echo link_tag('assets/layouts/layout3/css/layout.min.css');
        echo link_tag('assets/layouts/layout3/css/themes/default.min.css');
        echo link_tag('assets/layouts/layout3/css/custom.min.css');
        // <!-- END THEME LAYOUT STYLES -->
        ?>
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="aassets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default">7</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <strong>12 pending</strong> tasks</h3>
                                        <a href="app_todo.html">view all</a>
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
                            <!-- BEGIN TODO DROPDOWN -->
                            <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-default">3</span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        <h3>You have
                                            <strong>12 pending</strong> tasks</h3>
                                        <a href="app_todo_2.html">view all</a>
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
                            <li class="droddown dropdown-separator">
                                <span class="separator"></span>
                            </li>
                            <!-- BEGIN INBOX DROPDOWN -->
                            <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="circle">3</span>
                                    <span class="corner"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <strong>7 New</strong> Messages</h3>
                                        <a href="app_inbox.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="aassets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
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
                                                        <img src="aassets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
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
                                                        <img src="aassets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
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
                                                        <img src="aassets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
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
                                                        <img src="aassets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
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
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="aassets/layouts/layout3/img/avatar9.jpg">
                                    <span class="username username-hide-mobile">Nick</span>
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
                                        <a href="app_todo_2.html">
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
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <form class="search-form" action="page_general_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="javascript:;"> Dashboard
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class=" ">
                                        <a href="index.html" class="nav-link  ">
                                            <i class="icon-bar-chart"></i> Default Dashboard
                                            <span class="badge badge-success">1</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dashboard_2.html" class="nav-link  ">
                                            <i class="icon-bulb"></i> Dashboard 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dashboard_3.html" class="nav-link  ">
                                            <i class="icon-graph"></i> Dashboard 3
                                            <span class="badge badge-danger">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="javascript:;"> UI Features
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu" style="min-width: 710px">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul class="mega-menu-submenu">
                                                        <li>
                                                            <a href="ui_colors.html"> Color Library </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_general.html"> General Components </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_buttons.html"> Buttons </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_confirmations.html"> Popover Confirmations </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_icons.html"> Font Icons </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_socicons.html"> Social Icons </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_typography.html"> Typography </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_tabs_accordions_navs.html"> Tabs, Accordions & Navs </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_tree.html"> Tree View </a>
                                                        </li>
                                                        <li>
                                                            <a href="maps_google.html"> Google Maps </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="mega-menu-submenu">
                                                        <li>
                                                            <a href="maps_vector.html"> Vector Maps </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_timeline.html"> Timeline </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_page_progress_style_1.html"> Page Progress Bar - Flash </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_page_progress_style_2.html"> Page Progress Bar - Big Counter </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_blockui.html"> Block UI </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_bootstrap_growl.html"> Bootstrap Growl Notifications </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_notific8.html"> Notific8 Notifications </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_toastr.html"> Toastr Notifications </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_bootbox.html"> Bootbox Dialogs </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="mega-menu-submenu">
                                                        <li>
                                                            <a href="ui_alerts_api.html"> Metronic Alerts API </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_session_timeout.html"> Session Timeout </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_idle_timeout.html"> User Idle Timeout </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_modals.html"> Modals </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_extended_modals.html"> Extended Modals </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_tiles.html"> Tiles </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_datepaginator.html"> Date Paginator </a>
                                                        </li>
                                                        <li>
                                                            <a href="ui_nestable.html"> Nestable List </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="javascript:;"> Layouts
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class=" ">
                                        <a href="layout_mega_menu_light.html" class="nav-link  "> Light Mega Menu </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_top_bar_light.html" class="nav-link  "> Light Top Bar Dropdowns </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_fluid_page.html" class="nav-link  "> Fluid Page </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_top_bar_fixed.html" class="nav-link  "> Fixed Top Bar </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_mega_menu_fixed.html" class="nav-link  "> Fixed Mega Menu </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_disabled_menu.html" class="nav-link  "> Disabled Menu Links </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_blank_page.html" class="nav-link  "> Blank Page </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                                <a href="javascript:;"> Components
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu" style="min-width: ">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul class="mega-menu-submenu">
                                                        <li>
                                                            <h3>Components 1</h3>
                                                        </li>
                                                        <li>
                                                            <a href="components_date_time_pickers.html"> Date & Time Pickers </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_color_pickers.html"> Color Pickers </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_select2.html"> Select2 Dropdowns </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_bootstrap_select.html"> Bootstrap Select </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_multi_select.html"> Multi Select </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="mega-menu-submenu">
                                                        <li>
                                                            <h3>Components 2</h3>
                                                        </li>
                                                        <li>
                                                            <a href="components_bootstrap_select_splitter.html"> Select Splitter </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_typeahead.html"> Typeahead Autocomplete </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_bootstrap_tagsinput.html"> Bootstrap Tagsinput </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_bootstrap_switch.html"> Bootstrap Switch </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_bootstrap_maxlength.html"> Bootstrap Maxlength </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="mega-menu-submenu">
                                                        <li>
                                                            <h3>Components 3</h3>
                                                        </li>
                                                        <li>
                                                            <a href="components_bootstrap_fileinput.html"> Bootstrap File Input </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_bootstrap_touchspin.html"> Bootstrap Touchspin </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_form_tools.html"> Form Widgets & Tools </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_context_menu.html"> Context Menu </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_editors.html"> Markdown & WYSIWYG Editors </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="mega-menu-submenu">
                                                        <li>
                                                            <h3>Components 4</h3>
                                                        </li>
                                                        <li>
                                                            <a href="components_code_editors.html"> Code Editors </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_ion_sliders.html"> Ion Range Sliders </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_noui_sliders.html"> NoUI Range Sliders </a>
                                                        </li>
                                                        <li>
                                                            <a href="components_knob_dials.html"> Knob Circle Dials </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="javascript:;"> More
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-settings"></i> Form Stuff
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="form_controls.html" class="nav-link "> Bootstrap Form
                                                    <br>Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_controls_md.html" class="nav-link "> Material Design
                                                    <br>Form Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_validation.html" class="nav-link "> Form Validation </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_validation_states_md.html" class="nav-link "> Material Design
                                                    <br>Form Validation States </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_validation_md.html" class="nav-link "> Material Design
                                                    <br>Form Validation </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_layouts.html" class="nav-link "> Form Layouts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_input_mask.html" class="nav-link "> Form Input Mask </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_editable.html" class="nav-link "> Form X-editable </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_wizard.html" class="nav-link "> Form Wizard </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_icheck.html" class="nav-link "> iCheck Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_image_crop.html" class="nav-link "> Image Cropping </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_fileupload.html" class="nav-link "> Multiple File Upload </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form_dropzone.html" class="nav-link "> Dropzone File Upload </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-briefcase"></i> Tables
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle"> Static Tables
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="table_static_basic.html" class="nav-link "> Basic Tables </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_static_responsive.html" class="nav-link "> Responsive Tables </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle"> Datatables
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="?p=" class="nav-link nav-toggle ">
                                            <i class="icon-wallet"></i> Portlets
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="portlet_boxed.html" class="nav-link "> Boxed Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="portlet_light.html" class="nav-link "> Light Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="portlet_solid.html" class="nav-link "> Solid Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="portlet_ajax.html" class="nav-link "> Ajax Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="portlet_draggable.html" class="nav-link "> Draggable Portlets </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="?p=" class="nav-link nav-toggle ">
                                            <i class="icon-settings"></i> Elements
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="elements_steps.html" class="nav-link "> Steps </a>
                                            </li>
                                            <li class=" ">
                                                <a href="elements_lists.html" class="nav-link "> Lists </a>
                                            </li>
                                            <li class=" ">
                                                <a href="elements_ribbons.html" class="nav-link "> Ribbons </a>
                                            </li>
                                            <li class=" ">
                                                <a href="elements_overlay.html" class="nav-link "> Overlays </a>
                                            </li>
                                            <li class=" ">
                                                <a href="elements_cards.html" class="nav-link "> User Cards </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-bar-chart"></i> Charts
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="charts_amcharts.html" class="nav-link "> amChart </a>
                                            </li>
                                            <li class=" ">
                                                <a href="charts_flotcharts.html" class="nav-link "> Flot Charts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="charts_flowchart.html" class="nav-link "> Flow Charts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="charts_google.html" class="nav-link "> Google Charts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="charts_echarts.html" class="nav-link "> eCharts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="charts_morris.html" class="nav-link "> Morris Charts </a>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle"> HighCharts
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="charts_highcharts.html" class="nav-link " target="_blank"> HighCharts </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="charts_highstock.html" class="nav-link " target="_blank"> HighStock </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="charts_highmaps.html" class="nav-link " target="_blank"> HighMaps </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="javascript:;">
                                    <i class="icon-briefcase"></i> Pages
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-basket"></i> eCommerce
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="ecommerce_index.html" class="nav-link ">
                                                    <i class="icon-home"></i> Dashboard </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ecommerce_orders.html" class="nav-link ">
                                                    <i class="icon-basket"></i> Orders </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ecommerce_orders_view.html" class="nav-link ">
                                                    <i class="icon-tag"></i> Order View </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ecommerce_products.html" class="nav-link ">
                                                    <i class="icon-graph"></i> Products </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ecommerce_products_edit.html" class="nav-link ">
                                                    <i class="icon-graph"></i> Product Edit </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-docs"></i> Apps
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="app_todo.html" class="nav-link ">
                                                    <i class="icon-clock"></i> Todo 1 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="app_todo_2.html" class="nav-link ">
                                                    <i class="icon-check"></i> Todo 2 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="app_inbox.html" class="nav-link ">
                                                    <i class="icon-envelope"></i> Inbox </a>
                                            </li>
                                            <li class=" ">
                                                <a href="app_calendar.html" class="nav-link ">
                                                    <i class="icon-calendar"></i> Calendar </a>
                                            </li>
                                            <li class=" ">
                                                <a href="app_ticket.html" class="nav-link ">
                                                    <i class="icon-notebook"></i> Support </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu active">
                                        <a href="javascript:;" class="nav-link nav-toggle active">
                                            <i class="icon-user"></i> User
                                            <span class="arrow open"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="page_user_profile_1.html" class="nav-link ">
                                                    <i class="icon-user"></i> Profile 1 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_user_profile_1_account.html" class="nav-link ">
                                                    <i class="icon-user-female"></i> Profile 1 Account </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_user_profile_1_help.html" class="nav-link ">
                                                    <i class="icon-user-following"></i> Profile 1 Help </a>
                                            </li>
                                            <li class=" active">
                                                <a href="page_user_profile_2.html" class="nav-link ">
                                                    <i class="icon-users"></i> Profile 2 </a>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle">
                                                    <i class="icon-notebook"></i> Login
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                                                    <i class="icon-lock"></i> Lock Screen 1 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                                                    <i class="icon-lock-open"></i> Lock Screen 2 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-social-dribbble"></i> General
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="page_general_about.html" class="nav-link ">
                                                    <i class="icon-info"></i> About </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_general_contact.html" class="nav-link ">
                                                    <i class="icon-call-end"></i> Contact </a>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle">
                                                    <i class="icon-notebook"></i> Portfolio
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle">
                                                    <i class="icon-magnifier"></i> Search
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a href="page_general_pricing.html" class="nav-link ">
                                                    <i class="icon-tag"></i> Pricing </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_general_faq.html" class="nav-link ">
                                                    <i class="icon-wrench"></i> FAQ </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_general_blog.html" class="nav-link ">
                                                    <i class="icon-pencil"></i> Blog </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_general_blog_post.html" class="nav-link ">
                                                    <i class="icon-note"></i> Blog Post </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_general_invoice.html" class="nav-link ">
                                                    <i class="icon-envelope"></i> Invoice </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_general_invoice_2.html" class="nav-link ">
                                                    <i class="icon-envelope"></i> Invoice 2 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-settings"></i> System
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="page_system_coming_soon.html" class="nav-link " target="_blank"> Coming Soon </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_system_404_1.html" class="nav-link "> 404 Page 1 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_system_404_2.html" class="nav-link " target="_blank"> 404 Page 2 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_system_404_3.html" class="nav-link " target="_blank"> 404 Page 3 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_system_500_1.html" class="nav-link "> 500 Page 1 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="page_system_500_2.html" class="nav-link " target="_blank"> 500 Page 2 </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>User Profile 2
                                <small>user profile sample</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h3>THEME COLORS</h3>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <ul class="theme-colors">
                                                        <li class="theme-color theme-color-default" data-theme="default">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Default</span>
                                                        </li>
                                                        <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Blue Hoki</span>
                                                        </li>
                                                        <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Blue Steel</span>
                                                        </li>
                                                        <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Orange</span>
                                                        </li>
                                                        <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Yellow Crusta</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <ul class="theme-colors">
                                                        <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Green Haze</span>
                                                        </li>
                                                        <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Red Sunglo</span>
                                                        </li>
                                                        <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Red Intense</span>
                                                        </li>
                                                        <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Purple Plum</span>
                                                        </li>
                                                        <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                                            <span class="theme-color-view"></span>
                                                            <span class="theme-color-name">Purple Studio</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Layout
                                                    <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                                                        <option value="boxed" selected="selected">Boxed</option>
                                                        <option value="fluid">Fluid</option>
                                                    </select>
                                                </li>
                                                <li> Top Menu Style
                                                    <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body"
                                                    data-placement="left">
                                                        <option value="dark" selected="selected">Dark</option>
                                                        <option value="light">Light</option>
                                                    </select>
                                                </li>
                                                <li> Top Menu Mode
                                                    <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body" data-placement="left">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="not-fixed" selected="selected">Not Fixed</option>
                                                    </select>
                                                </li>
                                                <li> Mega Menu Style
                                                    <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body"
                                                    data-placement="left">
                                                        <option value="dark" selected="selected">Dark</option>
                                                        <option value="light">Light</option>
                                                    </select>
                                                </li>
                                                <li> Mega Menu Mode
                                                    <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body"
                                                    data-placement="left">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="not-fixed">Not Fixed</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="profile">
                                <div class="tabbable-line tabbable-full-width">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab"> Account </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_6" data-toggle="tab"> Help </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_1">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled profile-nav">
                                                        <li>
                                                            <img src="aassets/pages/media/profile/people19.png" class="img-responsive pic-bordered" alt="" />
                                                            <a href="javascript:;" class="profile-edit"> edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Projects </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Messages
                                                                <span> 3 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Friends </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Settings </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-8 profile-info">
                                                            <h1 class="font-green sbold uppercase">John Doe</h1>
                                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat
                                                                volutpat. </p>
                                                            <p>
                                                                <a href="javascript:;"> www.mywebsite.com </a>
                                                            </p>
                                                            <ul class="list-inline">
                                                                <li>
                                                                    <i class="fa fa-map-marker"></i> Spain </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i> 18 Jan 1982 </li>
                                                                <li>
                                                                    <i class="fa fa-briefcase"></i> Design </li>
                                                                <li>
                                                                    <i class="fa fa-star"></i> Top Seller </li>
                                                                <li>
                                                                    <i class="fa fa-heart"></i> BASE Jumping </li>
                                                            </ul>
                                                        </div>
                                                        <!--end col-md-8-->
                                                        <div class="col-md-4">
                                                            <div class="portlet sale-summary">
                                                                <div class="portlet-title">
                                                                    <div class="caption font-red sbold"> Sales Summary </div>
                                                                    <div class="tools">
                                                                        <a class="reload" href="javascript:;"> </a>
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <span class="sale-info"> TODAY SOLD
                                                                                <i class="fa fa-img-up"></i>
                                                                            </span>
                                                                            <span class="sale-num"> 23 </span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="sale-info"> WEEKLY SALES
                                                                                <i class="fa fa-img-down"></i>
                                                                            </span>
                                                                            <span class="sale-num"> 87 </span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="sale-info"> TOTAL SOLD </span>
                                                                            <span class="sale-num"> 2377 </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-md-4-->
                                                    </div>
                                                    <!--end row-->
                                                    <div class="tabbable-line tabbable-custom-profile">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab_1_11" data-toggle="tab"> Latest Customers </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_22" data-toggle="tab"> Feeds </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab_1_11">
                                                                <div class="portlet-body">
                                                                    <table class="table table-striped table-bordered table-advance table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-briefcase"></i> Company </th>
                                                                                <th class="hidden-xs">
                                                                                    <i class="fa fa-question"></i> Descrition </th>
                                                                                <th>
                                                                                    <i class="fa fa-bookmark"></i> Amount </th>
                                                                                <th> </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;"> Pixel Ltd </a>
                                                                                </td>
                                                                                <td class="hidden-xs"> Server hardware purchase </td>
                                                                                <td> 52560.10$
                                                                                    <span class="label label-success label-sm"> Paid </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;"> Smart House </a>
                                                                                </td>
                                                                                <td class="hidden-xs"> Office furniture purchase </td>
                                                                                <td> 5760.00$
                                                                                    <span class="label label-warning label-sm"> Pending </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;"> FoodMaster Ltd </a>
                                                                                </td>
                                                                                <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                                                <td> 12400.00$
                                                                                    <span class="label label-success label-sm"> Paid </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;"> WaterPure Ltd </a>
                                                                                </td>
                                                                                <td class="hidden-xs"> Payment for Jan 2013 </td>
                                                                                <td> 610.50$
                                                                                    <span class="label label-danger label-sm"> Overdue </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;"> Pixel Ltd </a>
                                                                                </td>
                                                                                <td class="hidden-xs"> Server hardware purchase </td>
                                                                                <td> 52560.10$
                                                                                    <span class="label label-success label-sm"> Paid </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;"> Smart House </a>
                                                                                </td>
                                                                                <td class="hidden-xs"> Office furniture purchase </td>
                                                                                <td> 5760.00$
                                                                                    <span class="label label-warning label-sm"> Pending </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="javascript:;"> FoodMaster Ltd </a>
                                                                                </td>
                                                                                <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                                                <td> 12400.00$
                                                                                    <span class="label label-success label-sm"> Paid </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!--tab-pane-->
                                                            <div class="tab-pane" id="tab_1_22">
                                                                <div class="tab-pane active" id="tab_1_1_1">
                                                                    <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                                                        <ul class="feeds">
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-success">
                                                                                                <i class="fa fa-bell-o"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> You have 4 pending tasks.
                                                                                                <span class="label label-danger label-sm"> Take action
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
                                                                                                <div class="label label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> New version v1.4 just lunched! </div>
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
                                                                                            <div class="label label-danger">
                                                                                                <i class="fa fa-bolt"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
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
                                                                                            <div class="label label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
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
                                                                                            <div class="label label-success">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 40 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-warning">
                                                                                                <i class="fa fa-plus"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New user registered. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 1.5 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-success">
                                                                                                <i class="fa fa-bell-o"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                                                                <span class="label label-inverse label-sm"> Overdue </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 2 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 3 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-warning">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 5 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 18 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 hours </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-info">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 hours </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--tab-pane-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab_1_2-->
                                        <div class="tab-pane" id="tab_1_3">
                                            <div class="row profile-account">
                                                <div class="col-md-3">
                                                    <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#tab_1-1">
                                                                <i class="fa fa-cog"></i> Personal info </a>
                                                            <span class="after"> </span>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_2-2">
                                                                <i class="fa fa-picture-o"></i> Change Avatar </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_3-3">
                                                                <i class="fa fa-lock"></i> Change Password </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_4-4">
                                                                <i class="fa fa-eye"></i> Privacity Settings </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="tab-content">
                                                        <div id="tab_1-1" class="tab-pane active">
                                                            <form role="form" action="#">
                                                                <div class="form-group">
                                                                    <label class="control-label">First Name</label>
                                                                    <input type="text" placeholder="John" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" placeholder="Doe" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Mobile Number</label>
                                                                    <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Interests</label>
                                                                    <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Occupation</label>
                                                                    <input type="text" placeholder="Web Developer" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">About</label>
                                                                    <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Website Url</label>
                                                                    <input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div>
                                                                <div class="margiv-top-10">
                                                                    <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div id="tab_2-2" class="tab-pane">
                                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                eiusmod. </p>
                                                            <form action="#" role="form">
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                        <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="..."> </span>
                                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix margin-top-10">
                                                                        <span class="label label-danger"> NOTE! </span>
                                                                        <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                    </div>
                                                                </div>
                                                                <div class="margin-top-10">
                                                                    <a href="javascript:;" class="btn green"> Submit </a>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div id="tab_3-3" class="tab-pane">
                                                            <form action="#">
                                                                <div class="form-group">
                                                                    <label class="control-label">Current Password</label>
                                                                    <input type="password" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">New Password</label>
                                                                    <input type="password" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Re-type New Password</label>
                                                                    <input type="password" class="form-control" /> </div>
                                                                <div class="margin-top-10">
                                                                    <a href="javascript:;" class="btn green"> Change Password </a>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div id="tab_4-4" class="tab-pane">
                                                            <form action="#">
                                                                <table class="table table-bordered table-striped">
                                                                    <tr>
                                                                        <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                        <td>
                                                                            <label class="uniform-inline">
                                                                                <input type="radio" name="optionsRadios1" value="option1" /> Yes </label>
                                                                            <label class="uniform-inline">
                                                                                <input type="radio" name="optionsRadios1" value="option2" checked/> No </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                        <td>
                                                                            <label class="uniform-inline">
                                                                                <input type="checkbox" value="" /> Yes </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                        <td>
                                                                            <label class="uniform-inline">
                                                                                <input type="checkbox" value="" /> Yes </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                        <td>
                                                                            <label class="uniform-inline">
                                                                                <input type="checkbox" value="" /> Yes </label>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!--end profile-settings-->
                                                                <div class="margin-top-10">
                                                                    <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-md-9-->
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="tab_1_6">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#tab_1">
                                                                <i class="fa fa-briefcase"></i> General Questions </a>
                                                            <span class="after"> </span>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_2">
                                                                <i class="fa fa-group"></i> Membership </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_3">
                                                                <i class="fa fa-leaf"></i> Terms Of Service </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_1">
                                                                <i class="fa fa-info-circle"></i> License Terms </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_2">
                                                                <i class="fa fa-tint"></i> Payment Rules </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tab_3">
                                                                <i class="fa fa-plus"></i> Other Questions </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="tab-content">
                                                        <div id="tab_1" class="tab-pane active">
                                                            <div id="accordion1" class="panel-group">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion1_1" class="panel-collapse collapse in">
                                                                        <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                                            you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion1_2" class="panel-collapse collapse">
                                                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
                                                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                                            haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-success">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion1_3" class="panel-collapse collapse">
                                                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
                                                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                                            haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion1_4" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-danger">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion1_5" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion1_6" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion1_7" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="tab_2" class="tab-pane">
                                                            <div id="accordion2" class="panel-group">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion2_1" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                                                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-danger">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion2_2" class="panel-collapse collapse">
                                                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
                                                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                                            haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-success">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion2_3" class="panel-collapse collapse">
                                                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
                                                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                                            haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion2_4" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion2_5" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion2_6" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion2_7" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="tab_3" class="tab-pane">
                                                            <div id="accordion3" class="panel-group">
                                                                <div class="panel panel-danger">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion3_1" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                                                            <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                                                synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-success">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion3_2" class="panel-collapse collapse">
                                                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
                                                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                                            haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion3_3" class="panel-collapse collapse">
                                                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
                                                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                                            haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion3_4" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion3_5" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion3_6" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordion3_7" class="panel-collapse collapse">
                                                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
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
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar3.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Bob Nilson</h4>
                                            <div class="media-heading-sub"> Project Manager </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar1.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nick Larson</h4>
                                            <div class="media-heading-sub"> Art Director </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">3</span>
                                        </div>
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar4.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Hubert</h4>
                                            <div class="media-heading-sub"> CTO </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar2.jpg" alt="...">
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
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar6.jpg" alt="...">
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
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar7.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ernie Kyllonen</h4>
                                            <div class="media-heading-sub"> Project Manager,
                                                <br> SmartBizz PTL </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar8.jpg" alt="...">
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
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar9.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Portalatin</h4>
                                            <div class="media-heading-sub"> CFO, H&D LTD </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar10.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Irina Savikova</h4>
                                            <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">4</span>
                                        </div>
                                        <img class="media-object" src="aassets/layouts/layout/img/avatar11.jpg" alt="...">
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
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
                                                <span class="body"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="aassets/layouts/layout/img/avatar3.jpg" />
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
        <!-- BEGIN PRE-FOOTER -->
        <div class="page-prefooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>About</h2>
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                        <h2>Subscribe Email</h2>
                        <div class="subscribe-form">
                            <form action="javascript:;">
                                <div class="input-group">
                                    <input type="text" placeholder="mail@email.com" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Submit</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>Follow Us On</h2>
                        <ul class="social-icons">
                            <li>
                                <a href="javascript:;" data-original-title="rss" class="rss"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>Contacts</h2>
                        <address class="margin-bottom-40"> Phone: 800 123 3456
                            <br> Email:
                            <a href="mailto:info@metronic.com">info@metronic.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class="page-footer">
            <div class="container"> 2014 &copy; Metronic by keenthemes.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END INNER FOOTER -->
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="aassets/global/plugins/respond.min.js"></script>
<script src="aassets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <?php 
        echo script_tag('assets/global/plugins/jquery.min.js');
        echo script_tag('assets/global/plugins/bootstrap/js/bootstrap.min.js');
        echo script_tag('assets/global/plugins/js.cookie.min.js');
        echo script_tag('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');
        echo script_tag('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');
        echo script_tag('assets/global/plugins/jquery.blockui.min.js');
        echo script_tag('assets/global/plugins/uniform/jquery.uniform.min.js');
        echo script_tag('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');
        // <!-- END CORE PLUGINS -->
        // <!-- BEGIN PAGE LEVEL PLUGINS -->
        echo script_tag('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js');
        echo script_tag('assets/global/plugins/gmaps/gmaps.min.js');
        // <!-- END PAGE LEVEL PLUGINS -->
        // <!-- BEGIN THEME GLOBAL SCRIPTS -->
         echo script_tag('assets/global/scripts/app.min.js');
        // <!-- END THEME GLOBAL SCRIPTS -->
        // <!-- BEGIN THEME LAYOUT SCRIPTS -->
        echo script_tag('assets/layouts/layout3/scripts/layout.min.js');
        echo script_tag('assets/layouts/layout3/scripts/demo.min.js');
        echo script_tag('assets/layouts/global/scripts/quick-sidebar.min.js');
        // <!-- END THEME LAYOUT SCRIPTS -->
        ?>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    </body>

</html>