<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pengajuan Kredit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>asset/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/vendor/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.js"></script>

    
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    
    <script src="<?php echo base_url() ?>asset/vendor/metisMenu/metisMenu.min.js"></script>

    <script src="<?php echo base_url() ?>asset/dist/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/jquery-validate/jquery.validate.min.js"></script> 
    <script src="<?php echo base_url() ?>asset/vendor/datetimepicker/jquery.datetimepicker.full.js"></script>
    <script src="<?php echo base_url() ?>asset/js/siakad.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>siswa">Sistem Pengajuan Kredit</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata("fullname") ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--li>
                            <a href="<?php //echo base_url() ?>siswa"><i class="fa fa-user fa-fw"></i> Data Siswa</a>
                        </li>
                        <li>
                            <a href="<?php //echo base_url() ?>siswa/hasil"><i class="fa fa-bar-chart-o fa-fw"></i> Hasil</span></a>
                        </li-->
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('userlogin/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            <!--div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <h3>Menu</h3>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
                
            </div-->
            <!-- /.navbar-static-side -->
        </nav>