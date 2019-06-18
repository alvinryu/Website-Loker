<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website Bootstrap dengan CodeIgniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.2.1.min-js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"
          data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toogle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Pencari Kerja</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url();?>">Home</a></li>
            <li><a href="<?php echo site_url("daftar"); ?>">Daftar Kerja</a></li>
            <li><a href="<?php echo site_url("pendaftarkerja"); ?>">Pendaftar Kerja</a></li>
            <li><a href="<?php echo site_url("tentang"); ?>">Tentang</a></li>
            <li><a href="<?php echo site_url("contact"); ?>">Contact</a></li>
          </ul>
        </div><!--nav collapse -->
      </div><!--Container-->
    </nav><!-- navbar -->
  </body>
</html>
