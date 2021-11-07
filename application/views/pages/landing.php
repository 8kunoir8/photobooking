<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PD Pratama Teknik</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>asset/dist/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        a{
            color: black;
            text-decoration: none;
        }
        .navbar-trans{
            background-color: #f8f8f824;
            border-color: #e7e7e724;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
        <nav class="navbar navbar-trans navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <ul class="nav navbar-top-links" style="display: inline-block;">
                <!-- /.dropdown -->
                <li class="dropdown" style="display: inline-block;">
                    <a href="<?php echo base_url() ?>">
                        Home
                    </a>
                    <!--ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Kantor Cabang</a>
                        </li>
                            
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul-->
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown" style="display: inline-block;">
                    <a href="<?php echo base_url('Front/signUp') ?>">
                        Pengajuan
                    </a>
                    <!--ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Kantor Cabang</a>
                        </li>
                            
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul-->
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown" style="display: inline-block;">
                    <a href="<?php echo base_url('Front/katalog') ?>">
                        Katalog
                    </a>
                    <!--ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Kantor Cabang</a>
                        </li>
                            
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul-->
                    <!-- /.dropdown-user -->
                </li>
                
                <li class="dropdown" style="display: inline-block;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        About
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo base_url('Front/about') ?>">Profile</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            </div>
            <div class="navbar-right" style="margin-right: 25px;">
                <ul class="nav navbar-top-links" style="display: inline-block;">
                <!-- /.dropdown -->
                <li style="display: inline-block;">
                    <a href="<?php echo base_url('login') ?>">
                        Admin
                    </a>
                </li>
                <!-- /.dropdown -->
            </ul>
            </div>
        </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message" style="padding-top:100px">
                        <img src="<?php echo base_url() ?>uploads/logo.jpg" style="height:200px">
                        <h3 style="color:#ffca28"><i>Sistem Service Dinamo</i></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="<?php echo base_url() ?>front/signUp" class="btn btn-default btn-lg"> <span class="network-name">Ajukan</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>userlogin" class="btn btn-default btn-lg"> <span class="network-name">Login</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	
    <!-- /.content-section-a -->

   
    <!-- /.content-section-b -->

  
    <!-- /.content-section-a -->

    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul> -->
                    <p class="copyright text-muted small">Copyright &copy; Kunoir 2018. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
