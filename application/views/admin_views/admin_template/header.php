<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title>Lable Worx Admin | Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  
  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/animate.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/style.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/style-responsive.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/theme/default.css" rel="stylesheet" id="theme" />
 
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
  <!-- ================== END PAGE LEVEL STYLE ================== -->
   <script src="<?php echo ADMIN_ASSETS; ?>plugins/jquery/jquery-1.9.1.min.js"></script>
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
</head>
<body>
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade in"><span class="spinner"></span></div>
  <!-- end #page-loader -->
  
  <!-- begin #page-container -->
  <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
      <!-- begin container-fluid -->
      <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Xzero Content ID</a>
          <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->
        
        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form full-width">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter keyword" />
                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </li>
          <li class="dropdown">
            <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
              <i class="fa fa-bell-o"></i>
              <span class="label">5</span>
            </a>
            <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?php echo ADMIN_ASSETS; ?>img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?php echo ADMIN_ASSETS; ?>img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
            </ul>
          </li>
          <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo ADMIN_ASSETS; ?>img/user-13.jpg" alt="" /> 
              <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInLeft">
              <li class="arrow"></li>
              <li><a href="javascript:;">Edit Profile</a></li>
              <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
              <li><a href="javascript:;">Calendar</a></li>
              <li><a href="javascript:;">Setting</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url()?>admeeno/rooteeno/logout">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <!-- end header navigation right -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end #header -->
    
    <!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
      <!-- begin sidebar scrollbar -->
      <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
          <li class="nav-profile">
            <div class="image">
              <a href="javascript:;"><img src="<?php echo ADMIN_ASSETS; ?>img/user-13.jpg" alt="" /></a>
            </div>
            <div class="info">
          Xzero
              <small>Admin Panel</small>
            </div>
          </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
          <li class="nav-header">Navigation</li>
          <!-- <li class="has-sub active">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-laptop"></i>
                <span>Dashboard</span>
              </a>
            <ul class="sub-menu">
                <li class="active"><a href="index.html">Dashboard v1</a></li>
                <li><a href="index_v2.html">Dashboard v2</a></li>
            </ul>
          </li> -->
          <!-- <li class="has-sub">
            <a href="javascript:;">
              <span class="badge pull-right">10</span>
              <i class="fa fa-inbox"></i> 
              <span>Email</span>
            </a>
            <ul class="sub-menu">
                <li><a href="email_inbox.html">Inbox v1</a></li>
                <li><a href="email_inbox_v2.html">Inbox v2</a></li>
                <li><a href="email_compose.html">Compose</a></li>
                <li><a href="email_detail.html">Detail</a></li>
            </ul>
          </li> -->
          <!-- <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-suitcase"></i>
                <span>UI Elements <span class="label label-theme m-l-5">NEW</span></span> 
            </a>
            <ul class="sub-menu">
              <li><a href="ui_general.html">General</a></li>
              <li><a href="ui_typography.html">Typography</a></li>
              
            </ul>
          </li> -->
          <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-laptop"></i>
                <!-- <span class="label label-theme m-l-5">NEW</span> -->
                <span>Home </span> 
            </a>
            <ul class="sub-menu">
              <li><a href="admin/dashboard">Dashboard</a></li>
             
              
              
            </ul>
          </li>
        <!--   <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-th"></i>
                <span>Tables</span>
            </a>
            <ul class="sub-menu">
              <li><a href="table_basic.html">Basic Tables</a></li>
              <li class="has-sub">
                  <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                  <ul class="sub-menu">
                      <li><a href="table_manage.html">Default</a></li>
                      <li><a href="table_manage_autofill.html">Autofill</a></li>
                      <li><a href="table_manage_buttons.html">Buttons</a></li>
                      <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                      <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                      <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                      <li><a href="table_manage_keytable.html">KeyTable</a></li>
                      <li><a href="table_manage_responsive.html">Responsive</a></li>
                      <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                      <li><a href="table_manage_scroller.html">Scroller</a></li>
                      <li><a href="table_manage_select.html">Select</a></li>
                      <li><a href="table_manage_combine.html">Extension Combination</a></li>
                  </ul>
              </li>
            </ul>
          </li> -->
          <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
              <i class="fa fa-tags"></i> 
              <span>Labels</span>
            </a>
            <ul class="sub-menu">
               <li><a href="<?php echo base_url().'admin/label/add_label'; ?>">New Label</a></li>
                <li><a href="<?php echo base_url().'admin/label/'; ?>">Label List</a></li>
               
            </ul>
          </li>
           <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
              <i class="fa fa-tags"></i> 
              <span>Artists</span>
            </a>
            <ul class="sub-menu">
                <li><a href="<?php echo base_url().'admin/artist'; ?>">New Artist</a></li>
                <li><a href="<?php echo base_url().'admin/artist/view'; ?>">Artist List</a></li>
            </ul>
          </li>
          <li class="has-sub">
              <a href="javascript:;">
                <b class="caret pull-right"></b>
                  <i class="fa fa-envelope"></i>
                  <span>Releases</span>
              </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url().'admin/release'; ?>">New Releases</a></li>
                <li><a href="<?php echo base_url().'admin/release/view'; ?>">Releases List</a></li>
              
            </ul>
          </li>
          <li class="has-sub">
              <a href="javascript:;">
                <b class="caret pull-right"></b>
                  <i class="fa fa-area-chart"></i>
                <span>Reports</span>
            </a>
            <ul class="sub-menu">
                <li><a href="#">Reports1</a></li>
                <li><a href="#">Reports2</a></li>
              <li><a href="#">Reports3</a></li>
                <li><a href="#">Reports4</a></li>
            </ul>
          </li>
          <!-- <li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li> -->
          <li class="has-sub">
              <a href="javascript:;">
                  <b class="caret pull-right"></b>
                  <i class="fa fa-map-marker"></i>
                  <span>Statements</span>
              </a>
            <ul class="sub-menu">
              <li><a href="#">Statements1</a></li>
              <li><a href="#">Statements2</a></li>
            </ul>
          </li>
         
          <li class="has-sub">
              <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-rss"></i>
                <span>Updates</span>
            </a>
              <ul class="sub-menu">
                  <li><a href="#">Updates</a></li>
                  
              </ul>
          </li>
          
           <li class="has-sub">
              <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-suitcase"></i>
                <span>Tools</span>
            </a>
              <ul class="sub-menu">
                  <li><a href="#">Tools</a></li>
                  
              </ul>
          </li>
           <li class="has-sub">
              <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-cog"></i>
                <span>Settings</span>
            </a>
              <ul class="sub-menu">
                  <li><a href="#">Settings</a></li>
                  
              </ul>
          </li>
          <!-- <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-cogs"></i>
                <span>Support</span>
            </a>
            <ul class="sub-menu">
              <li><a href="page_blank.html">Blank Page</a></li>
              <li><a href="page_with_footer.html">Page with Footer</a></li>
              <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
              <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
              <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
              <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
              <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
              <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
              <li><a href="page_full_height.html">Full Height Content</a></li>
              <li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
              <li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
              <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                            <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                            <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                            <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                            <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                            <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
            </ul>
          </li> -->
          <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-gift"></i>
                <span>Support</span>
            </a>
            <ul class="sub-menu">
                <li><a href="#">Support1</a></li>
                <li><a href="#">Support2</a></li>
              
            </ul>
          </li>
          <!-- <li class="has-sub">
              <a href="javascript:;">
                  <b class="caret pull-right"></b>
                  <i class="fa fa-key"></i>
                  <span>Login & Register</span>
              </a>
              <ul class="sub-menu">
              <li><a href="login.html">Login</a></li>
                  <li><a href="login_v2.html">Login v2</a></li>
                  <li><a href="login_v3.html">Login v3</a></li>
                  <li><a href="register_v3.html">Register v3</a></li>
              </ul>
          </li> -->
          <!-- <li class="has-sub">
              <a href="javascript:;">
                  <b class="caret pull-right"></b>
                  <i class="fa fa-cubes"></i>
                  <span>Version <span class="label label-theme m-l-5">NEW</span></span>
              </a>
              <ul class="sub-menu">
              <li><a href="javascript:;">HTML</a></li>
                  <li><a href="../template_content_ajax/index.html">AJAX</a></li>
                  <li><a href="../template_content_angularjs/index.html">ANGULAR JS</a></li>
                  <li><a href="../template_content_angularjs2/index.html">ANGULAR JS 2 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                  <li><a href="../template_content_material/index.html">MATERIAL DESIGN</a></li>
              </ul>
          </li> -->
          <!-- <li class="has-sub">
              <a href="javascript:;">
                  <b class="caret pull-right"></b>
                  <i class="fa fa-medkit"></i>
                  <span>Helper</span>
              </a>
              <ul class="sub-menu">
              <li><a href="helper_css.html">Predefined CSS Classes</a></li>
              </ul>
          </li> -->
          <!-- <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-align-left"></i> 
                <span>Menu Level</span>
            </a>
            <ul class="sub-menu">
              <li class="has-sub">
                <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        Menu 1.1
                    </a>
                <ul class="sub-menu">
                  <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        Menu 2.1
                    </a>
                    <ul class="sub-menu">
                      <li><a href="javascript:;">Menu 3.1</a></li>
                      <li><a href="javascript:;">Menu 3.2</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:;">Menu 2.2</a></li>
                  <li><a href="javascript:;">Menu 2.3</a></li>
                </ul>
              </li>
              <li><a href="javascript:;">Menu 1.2</a></li>
              <li><a href="javascript:;">Menu 1.3</a></li>
            </ul>
          </li> -->
              <!-- begin sidebar minify button -->
          <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
              <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
      </div>
      <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->
    