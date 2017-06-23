<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title>Lable Worx Admin | Login Page</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  
  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/animate.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/style.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/style-responsive.min.css" rel="stylesheet" />
  <link href="<?php echo ADMIN_ASSETS; ?>css/theme/default.css" rel="stylesheet" id="theme" />
  <!-- ================== END BASE CSS STYLE ================== -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="<?php echo ADMIN_ASSETS; ?>plugins/pace/pace.min.js"></script>
  <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade in"><span class="spinner"></span></div>
  <!-- end #page-loader -->
  
  <!-- begin #page-container -->
  <div id="page-container" class="fade">
      <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="<?php echo ADMIN_ASSETS; ?>img/login-bg/bg-7.jpg" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="fa fa-diamond text-success"></i> Music & Video Distribution</h4>
                    <p>
                       &copy; XZero All Right Reserved 2017
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> XZero Content ID
                        <small>Music & Video Distribution</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form  action="<?php echo base_url().'admin/admin/do_login' ;?>" method="POST" class="margin-bottom-0">
                        <div class="form-group m-b-15">
                            <input type="email" name="email" class="form-control input-lg" placeholder="Email Address" required />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name ="password" class="form-control input-lg" placeholder="Password" required />
                        </div>
                        <div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" /> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Not a member yet? Click <a href="register_v3.html" class="text-success">here</a> to register.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; XZero All Right Reserved 2017
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>





      
        
    
  </div>
  <!-- end page container -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="<?php echo ADMIN_ASSETS; ?>plugins/jquery/jquery-1.9.1.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS; ?>plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS; ?>plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="<?php echo ADMIN_ASSETS; ?>crossbrowserjs/html5shiv.js"></script>
    <script src="<?php echo ADMIN_ASSETS; ?>crossbrowserjs/respond.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS; ?>crossbrowserjs/excanvas.min.js"></script>
  <![endif]-->
  <script src="<?php echo ADMIN_ASSETS; ?>plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS; ?>plugins/jquery-cookie/jquery.cookie.js"></script>
  <!-- ================== END BASE JS ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="<?php echo ADMIN_ASSETS; ?>js/login-v2.demo.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS; ?>js/apps.min.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

  <script>
    $(document).ready(function() {
      App.init();
      LoginV2.init();
    });
  </script>
</body>
</html>
