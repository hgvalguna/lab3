<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Personal Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon" type="images/favicon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Assets CSS Files -->
  <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/remixicon/remixicon.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/swiper/swiper-bundle.min.css');?>" rel="stylesheet">
  <!-- Assets JS Files -->
<script src="<?= base_url('assets/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?= base_url('assets/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('assets/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/waypoints/noframework.waypoints.js'); ?>"></script>
<script src="<?= base_url('assets/php-email-form/validate.js'); ?>"></script> 

  <!-- Template Main CSS File 
  <link href="<?=base_url('assets/css/style.css'); ?>" rel="stylesheet"> -->
<?php
echo link_tag('assets/css/style.css'); ?>
<!-- Template Main JS File 
<script src="<?= base_url('assets/js/main.js');?>"></script> -->
<?php script_tag('assets/js/main.js'); ?>
</head>
<body>
<header id="header">
    <div class="container">

      <h1><a href="home">Ivan Valguna</a></h1>
      <!-- Uncomment below if you prefer to use an image logo 
      <a href="home" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a <span>Computer Science Student</span></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="home#header">Home</a></li>
          <li><a class="nav-link" href="home#about">About</a></li>
          <li><a class="nav-link" href="home#portfolio">Images</a></li>
          <li><a class="nav-link" href="home#reference">References</a></li>
          <li><a class="nav-link" href="news">News</a></li>
          <li><a class="nav-link" href="guest">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="https://github.com/hgvalguna" class="github"><i class="bi bi-github"></i></a>
        <a href="https://discord.com/" class="facebook"><i class="bi bi-discord"></i></a>
        <a href="https://instagram.com" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
    