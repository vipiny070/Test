<!DOCTYPE html>
<html>
    
<!-- Mirrored from eonythemes.com/themes/wb/simple/main/index-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 08:00:27 GMT -->
<head>

        <meta charset="utf-8">
        <title>Notify me</title>
        <meta name="description" content="Notify me">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

        <!-- Modernizr -->
        <script src="assets/js/modernizr.js"></script>
        <?php include('insert.php') ?>

    </head>
    <body>
                 <?php include 'server.php'; ?>

         <?php include 'loginserver.php'; ?>


        <div id="wrapper">
            <header class="header header2 sticky-header">
                <div class="header-top dark">
                    <div class="container-fluid">
                        <div class="top-links pull-left">
                            <a href="#" data-toggle="modal" data-target="#Login">Login</a>
                            <a href="#" data-toggle="modal" data-target="#Register">Register</a>
                        </div><!-- End .top-links -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .header-top -->

                <div class="header-inner">
                    <div class="container-fluid">
                        <a href="index.php" class="site-logo" title="Notify me">
                            <h1 style="font-size: 45px">Notify me</h1>
<!--                             <img src="assets/images/logo.png" alt="Simple Logo">
 -->                            <span class="sr-only" >Notify me</span>
                        </a>

                        

                            

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-container" aria-expanded="false">
                            <span class="toggle-text">Menu</span>
                            <span class="toggle-wrapper">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>

                        <div class="collapse navbar-collapse" id="main-nav-container">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="medical.php">MEDICAL</a>
                                    
                                </li>
                                <li>
                                    <a href="timetable.php">TIMETABLE</a>
                                    
                                </li>
                                <li>
                                    <a href="sports.php">SPORTS</a>
                                    
                                </li>
                                <li>
                                    <a href="post.php">POST</a>
                                    
                                </li>
                                
                               <!--  <li class="dropdown search-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="visible-inline-xs">Search</span><i class="fa fa-search"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <form action="#">
                                            <input type="search" class="form-control" placeholder="Search..." required>
                                            <button type="submit" class="btn btn-custom"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->

                    </div><!-- End .container-fluid -->
                </div><!-- End .header-inner -->
            </header><!-- End .header -->
            <div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="index.php">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>

                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
                            <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="login_user">login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="index.php">
                    <?php include('error.php'); ?>
                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" >
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn" name="login_user">Login</button>
                    </div>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                  </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            
      