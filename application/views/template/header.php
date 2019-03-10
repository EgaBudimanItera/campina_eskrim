<?php
$namauser = $this->session->userdata('namauser');
$akses = $this->session->userdata('akses');
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Persediaan Barang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
     <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/themesaller-forms.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
     <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-select/bootstrap-select.css">
    
    
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/wave/waves.min.css">
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.dataTables.min.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/datapicker/datepicker3.css">
    
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen/chosen.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?=base_url()?>assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="fa fa-user">  <?=$namauser."(".$akses.")"?></i></span></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url()?>login/logout"  role="button" ><span><i class="fa fa-lock">  Logout</i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>