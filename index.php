<?php include('header.php') ?>
<?php session_start(); ?>
<!-- <?php if (!isset($_SESSION['level'])) {
            echo "<script> window.location.assign('home.php'); </script>";
        } ?> -->
<?php define('SITE_ROOT', realpath(dirname(__FILE__))); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="img/logo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php include('navbar.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('sidebar.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <?php include('konten.php') ?>
        <!-- /.content-wrapper -->
        <?php include('footer.php') ?>