<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php 
      if($akses == 8){ ?>
        <title>Distribusi Barang</title>
  <?php }elseif($akses == 1){ ?>
        <title>Super User</title>
  <?php }elseif($akses == 4){ ?>
        <title>Keanggotaan</title>
  <?php } ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EK</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E-Koperasi</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $var; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <p>
                  <?php echo $var; ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>c_login/logout/<?php echo $akses; ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php 
      if($akses == 8){ ?>
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="<?php echo base_url(); ?>c_distribusi_barang/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Distribusi Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>c_distribusi_barang/data_distribusi"><i class="fa fa-circle-o"></i> List Distribusi Barang</a></li>
            <li><a href="<?php echo base_url(); ?>c_distribusi_barang/konfirmasi"><i class="fa fa-circle-o"></i> Konfirmasi Pengiriman Barang</a></li>
          </ul>
        </li>
      </ul>
      <?php }elseif ($akses == 1) { ?>
      
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="<?php echo base_url(); ?>c_super_user/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>c_super_user/profil"><i class="fa fa-circle-o"></i> Profil Koperasi</a></li>
            <li><a href="<?php echo base_url(); ?>c_super_user/pengaturanha"><i class="fa fa-circle-o"></i> Pengaturan Hak Akses</a></li>
          </ul>
        </li>
      </ul>
      <?php }elseif ($akses == 4) { ?>
      
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="<?php echo base_url(); ?>c_keanggotaan/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Manajemen Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>c_keanggotaan/daftar_anggota"><i class="fa fa-circle-o"></i> Daftar Anggota</a></li>
            <li><a href="<?php echo base_url(); ?>c_keanggotaan/a_view_anggota"><i class="fa fa-circle-o"></i> List Anggota</a></li>
            <li><a href="<?php echo base_url(); ?>c_keanggotaan/a_view_anggota_nonAktif"><i class="fa fa-circle-o"></i> List Anggota Non Aktif</a></li>
          </ul>
        </li>
      </ul>
      <?php }elseif ($akses == 10) { ?>
      
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="<?php echo base_url(); ?>c_anggota/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Anggota Koperasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>c_anggota/hal_dtanggota"><i class="fa fa-circle-o"></i> Data Diri</a></li>
            <li><a href="<?php echo base_url(); ?>c_anggota/updatePassword"><i class="fa fa-circle-o"></i> Update Data Diri</a></li>
            <li><a href="<?php echo base_url(); ?>c_anggota/undurdiri"><i class="fa fa-circle-o"></i> Pengunduran Diri</a></li>
          </ul>
        </li>
      </ul>
      <?php } ?>
    </section>
    <!-- /.sidebar -->
  </aside>
