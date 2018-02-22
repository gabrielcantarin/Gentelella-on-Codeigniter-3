<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gabriel! | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

    <link href="<?= base_url('assets/vendors/switchery/dist/switchery.min.css')?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('assets/vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="<?= base_url('assets/vendors/dropzone/dist/min/dropzone.min.css') ?>" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="<?= base_url('assets/vendors/fullcalendar/dist/fullcalendar.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/fullcalendar/dist/fullcalendar.print.css') ?>" rel="stylesheet" media="print">
    <!-- Datatables -->
    <link href="<?= base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('assets/vendors/jqvmap/dist/jqvmap.min.css')?>" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/build/css/custom.min.css') ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url('assets/images/img.jpg') ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/index') ?>">Dashboard</a></li>
                      <li><a href="<?= base_url('admin/index2') ?>">Dashboard2</a></li>
                      <li><a href="<?= base_url('admin/index3') ?>">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/form') ?>">General Form</a></li>
                      <li><a href="<?= base_url('admin/form_advanced') ?>">Advanced Components</a></li>
                      <li><a href="<?= base_url('admin/form_validation') ?>">Form Validation</a></li>
                      <li><a href="<?= base_url('admin/form_wizards') ?>">Form Wizard</a></li>
                      <li><a href="<?= base_url('admin/form_upload') ?>">Form Upload</a></li>
                      <li><a href="<?= base_url('admin/form_buttons') ?>">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/general_elements') ?>">General Elements</a></li>
                      <li><a href="<?= base_url('admin/media_gallery') ?>">Media Gallery</a></li>
                      <li><a href="<?= base_url('admin/typography') ?>">Typography</a></li>
                      <li><a href="<?= base_url('admin/icons') ?>">Icons</a></li>
                      <li><a href="<?= base_url('admin/glyphicons') ?>">Glyphicons</a></li>
                      <li><a href="<?= base_url('admin/widgets') ?>">Widgets</a></li>
                      <li><a href="<?= base_url('admin/invoice') ?>">Invoice</a></li>
                      <li><a href="<?= base_url('admin/inbox') ?>">Inbox</a></li>
                      <li><a href="<?= base_url('admin/calendar') ?>">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/tables') ?>">Tables</a></li>
                      <li><a href="<?= base_url('admin/tables_dynamic') ?>">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/chartjs') ?>">Chart JS</a></li>
                      <li><a href="<?= base_url('admin/chartjs2') ?>">Chart JS2</a></li>
                      <li><a href="<?= base_url('admin/morisjs') ?>">Moris JS</a></li>
                      <li><a href="<?= base_url('admin/echarts') ?>">ECharts</a></li>
                      <li><a href="<?= base_url('admin/other_charts') ?>">Other Charts</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/e_commerce') ?>">E-commerce</a></li>
                      <li><a href="<?= base_url('admin/projects') ?>">Projects</a></li>
                      <li><a href="<?= base_url('admin/project_detail') ?>">Project Detail</a></li>
                      <li><a href="<?= base_url('admin/contacts') ?>">Contacts</a></li>
                      <li><a href="<?= base_url('admin/profile') ?>">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/page_403') ?>">403 Error</a></li>
                      <li><a href="<?= base_url('admin/page_404') ?>">404 Error</a></li>
                      <li><a href="<?= base_url('admin/page_500') ?>">500 Error</a></li>
                      <li><a href="<?= base_url('admin/plain_page') ?>">Plain Page</a></li>
                      <li><a href="<?= base_url('admin/login') ?>">Login Page</a></li>
                      <li><a href="<?= base_url('admin/pricing_tables') ?>">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?= base_url('admin/level2') ?>">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('assets/images/img.jpg') ?>" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?= base_url('assets/images/img.jpg') ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?= base_url('assets/images/img.jpg') ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?= base_url('assets/images/img.jpg') ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?= base_url('assets/images/img.jpg') ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->