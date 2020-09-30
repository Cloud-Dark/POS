<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Selamat Datang di Web PT XYZ</title>

    <!-- Bootstrap Core CSS -->
      <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
      <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">

      <style type="text/css">
      .bg {
           width: 100%;
           height: 100%;
           position: fixed;
           z-index: -1;
           float: left;
           left: 0;
           margin-top: -20px;
      }
      </style>
</head>

<body>
<img src="<?php echo base_url().'assets/img/tokba.png'?>" alt="gambar" class="bg" />
    <!-- Navigation -->
   <?php
        $this->load->view('web/menuhome');
   ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#fcc;">Selamat Datang di
                    <small>Web Penjualan PT XYZ</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
	<div class="mainbody-section text-center">


        <!-- Projects Row -->


        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

            <div class="col-md-3 portfolio-item">
                <div class="menu-item color" style="height:150px;">
                     <a href="<?php echo base_url().'web/about'?>" data-toggle="modal">
                           <i class="fa fa-info"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Tentang Aplikasi</p>
                      </a>
                </div>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item purple" style="height:150px;">
                     <a href="<?php echo base_url().'web/barang'?>" data-toggle="modal">
                           <i class="fa fa-home"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Semua Produk</p>
                      </a>
                </div>
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'web/lokasi'?>" data-toggle="modal">
                           <i class="fa fa-map"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Lokasi Toko</p>
                      </a>
                </div>
            </div>
        </div>


        <!-- /.row -->

    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</body>

</html>
