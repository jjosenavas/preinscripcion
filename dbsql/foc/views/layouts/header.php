<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema preinscripción</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/feyalegria.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"><!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="</?php echo base_url(); ?>assets/template/plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/summernote/summernote-bs4.css">
    <!-- confirm jquery -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/jquery-confirm/jquery-confirm.css">
    <!-- ccs propio -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/custom.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <ul class="navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="<?php echo base_url(); ?>assets/template/dist/img/user1-128x128.jpg" class="user-image" alt="User Image"> -->
             
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!-- <img src="<?php echo base_url();?>assets/template/dist/img/user1-128x128.jpg" class="" alt="User Image"> -->
                <p>
                  <?php echo $this->session->userdata('nombre_hacienda'); ?>
                  <small>Usuario:
                    <?php echo $this->session->userdata('codigo_aso'); ?></small>
                  <small><?php echo $this->session->userdata('ubicacion'); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <small>Usuario: <?php echo $this->session->userdata('username'); ?></small>
                  </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>

        </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <ion-icon size="large" src="<?php echo base_url(); ?>assets/template/ionicons/exit-outline.svg"></ion-icon>
                       
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="<?php echo base_url(); ?>auth/logout" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                            <ion-icon size="small" src="<?php echo base_url(); ?>assets/template/ionicons/exit-outline.svg"></ion-icon>
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    </h3>
                                    <p class="text-sm">Salir del sistema.</p>

                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>

                    </div>
                </li>
            </ul>
            

        </nav>