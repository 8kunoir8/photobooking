<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ComProject</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>asset/build/css/custom.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/jquery/dist/jquery.min.js"></script>

        
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url() ?>" class="site_title"> <span style="margin-left: 12.5px;">- Management -</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php if($this->session->userdata('pic') == '' OR $this->session->userdata('pic') == NULL){echo base_url().'asset/images/avatar.jpg';}else{echo base_url().'asset/images/'.$this->session->userdata('pic');} ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('fullname') ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url("dashboard") ?>"><i class="fa fa-home"></i> Dashboard </a></li>
                  <li><a><i class="fa fa-cog"></i> Authorization <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if($this->session->userdata('level')==0){ ?>
                      <li><a href="<?php echo base_url('admin') ?>">Authorization Admin</a></li>
                      <?php } ?>
                      <?php if($this->session->userdata('level')!=2){ ?>
                      <li><a href="<?php echo base_url('user') ?>">Authorization User</a></li>
                      <?php } ?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('paket') ?>">Master Paket</a></li>
                      <li><a href="<?php echo base_url('photografer') ?>">Master Photografer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tags"></i> Order <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('catpart') ?>">Jenis Part</a></li>
                      <li><a href="<?php echo base_url('type') ?>">Tipe Part</a></li>
                      <li><a href="<?php echo base_url('order') ?>">Daftar Pesanan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-exchange"></i> Transaction <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Home/masterEstimasi') ?>">Estimasi Kerusakan</a></li>
                      <?php if($this->session->userdata('level')!=2){ ?>
                      <li><a href="<?php echo base_url('Home/masterPerbaikan') ?>">Pengajuan Perbaikan</a></li>
                      <?php } ?>
                    </ul>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Home/reportPerbaikan') ?>"><i class="fa fa-file-text"></i> Report</a>
                  </li>
                  
                </ul>
              </div>
              <!--div class="menu_section">
                <h3>LIVE ON</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">E-commerce</a></li>
                      <li><a href="#">Projects</a></li>
                      <li><a href="#">Project Detail</a></li>
                      <li><a href="#">Contacts</a></li>
                      <li><a href="#">Profile</a></li>
                    </ul>
                  </li>                 
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div-->

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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('logout') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>