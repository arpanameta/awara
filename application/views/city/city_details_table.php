
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
        <title>Metronic | Buttons Datatable </title>
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
        echo link_tag('assets/global/plugins/datatables/datatables.min.css');
        echo link_tag('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css');
        echo link_tag('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css');
        // <!-- END PAGE LEVEL PLUGINS -->
        // <!-- BEGIN THEME GLOBAL STYLES -->
        // <link href="" rel="stylesheet" id="style_components" type="text/css" />
        echo link_tag('assets/global/css/components-md.min.css');
        echo link_tag('assets/global/css/plugins-md.min.css');
        // <!-- END THEME GLOBAL STYLES -->
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
                        <a href="<?php echo base_url(); ?>city-table">
                            <img src="assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="assets/layouts/layout3/img/avatar9.jpg">
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
                            <li class="menu-dropdown classic-menu-dropdown">
                                <a href="<?php echo base_url(); ?>users-table"> Users
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="<?php echo base_url(); ?>city-table"> City
                                    <span class="arrow"></span>
                                </a>
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
                            <li class="menu-dropdown classic-menu-dropdown active">
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
                                    <li class="dropdown-submenu active">
                                        <a href="javascript:;" class="nav-link nav-toggle active">
                                            <i class="icon-briefcase"></i> Tables
                                            <span class="arrow open"></span>
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
                                            <li class="dropdown-submenu active">
                                                <a href="javascript:;" class="nav-link nav-toggle"> Datatables
                                                    <span class="arrow open"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                                    </li>
                                                    <li class="active">
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
                            <li class="menu-dropdown classic-menu-dropdown ">
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
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-user"></i> User
                                            <span class="arrow"></span>
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
                                            <li class=" ">
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
                            <h1>Users
                                <small>Details</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>city-table">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">City</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Datatables</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase">City</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                <thead >
                                                    <tr>
                                                        <th> S. No. </th>
                                                        <th> City Name </th>
                                                        <th> Short Code </th>
                                                        <th> Status </th>
                                                        <th> View </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="city_data_json">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
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
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
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
        echo script_tag('assets/global/scripts/datatable.js');
        echo script_tag('assets/global/plugins/datatables/datatables.min.js');
        echo script_tag('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js');
        echo script_tag('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js');
        // <!-- END PAGE LEVEL PLUGINS -->
        
        // <!-- BEGIN THEME GLOBAL SCRIPTS -->
        echo script_tag('assets/global/scripts/app.min.js');
        // <!-- END THEME GLOBAL SCRIPTS -->
        
        // <!-- BEGIN PAGE LEVEL SCRIPTS -->
        // echo script_tag('assets/pages/scripts/table-datatables-buttons.min.js');
        // <!-- END PAGE LEVEL SCRIPTS -->
        
        // <!-- BEGIN THEME LAYOUT SCRIPTS -->
        echo script_tag('assets/layouts/layout3/scripts/layout.min.js');
        echo script_tag('assets/layouts/layout3/scripts/demo.min.js');
        echo script_tag('assets/layouts/global/scripts/quick-sidebar.min.js');
        // <!-- END THEME LAYOUT SCRIPTS -->
        echo script_tag('assets/js/city/city_details_table.js');
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                new AWARA.Admin("<?php echo base_url(); ?>");
            });
        </script>
    </body>

</html>