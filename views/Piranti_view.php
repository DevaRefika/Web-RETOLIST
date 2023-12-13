<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fisika Piranti Semikonduktor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datetimepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/nouislider.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  </head>
  <body>
		
  <div class="main-section">


		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">FISIKA PIRANTI SEMIKONDUKTOR</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              
	          <li class="nav-item cta"><a href="<?php echo base_url().'index.php/Piranti/Logout'?>" class="nav-link icon d-flex align-items-center"><i class="ion-ios-cloud-download mr-2"></i> Logout</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
	<br>
<br>
<br>
<br>
<div class="form-check d-flex justify">
  <a href="<?php echo base_url().'index.php/Piranti/PengajuanCatatan'?>">
                            <button type="button" class="btn btn-outline-danger mr-2 ml-2">Pengajuan</button></a>
                            <a href="<?php echo base_url().'index.php/Piranti/Landpage'?>">
        <button type="button" class="btn btn-primary">Kembali</button>
    </a>
                        </div>
		<div class="col-lg-6 mb-5 mb-md-0">
		<?php foreach($catatan as $chart) : ?>
						<h1 class="heading-section mb-3"> <br>
						<?= $chart['judul'] ?>
						</h1>
						<div class="tabulation-2">
    <ul class="nav nav-pills nav-fill d-md-flex d-block">
        <li class="nav-item">
            <a class="nav-link py-3" data-toggle="tab" href="#home<?= $chart['id_catatan'] ?>"><span class="ion-ios-home mr-2"></span> Home</a>
        </li>
        <li class="nav-item px-lg-2">
            <a class="nav-link py-3" data-toggle="tab" href="#deskripsi<?= $chart['id_catatan'] ?>"><span class="ion-ios-person mr-2"></span> Deskripsi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link py-3" data-toggle="tab" href="#file<?= $chart['id_catatan'] ?>"><span class="ion-ios-mail mr-2"></span> PDF</a>
        </li>
    </ul>
    <div class="tab-content rounded mt-2">
        <div class="tab-pane container p-4 show active" id="home<?= $chart['id_catatan'] ?>">
            <!-- Add your home content here -->
            <h3>Tanggal Input :</h3>
            <p><?= $chart['tanggal'] ?></p>
            <h3>Diinput oleh :</h3>
            <p><?= $chart['nim'] ?></p>
        </div>
        <div class="tab-pane container p-4" id="deskripsi<?= $chart['id_catatan'] ?>">
            <p><?= $chart['deskripsi'] ?></p>
        </div>
        <div class="tab-pane container p-4 fade" id="file<?= $chart['id_catatan'] ?>">
            <?php if (!empty($chart['file'])) : ?>
                <a href="<?= base_url('assets/pdf/' . $chart['file']) ?>" download="<?= $chart['file'] ?>">
                    <button type="button" class="btn btn-danger">Download</button>
                </a>
            <?php else : ?>
                <p>No file available for download.</p>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach ?>
</div>

				</section>
	  <footer class="ftco-section ftco-section-2">
	  	<div class="col-md-12 text-center">
          <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());

            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
	  </footer>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/nouislider.min.js') ?>"></script>
<script src="<?= base_url('assets/js/moment-with-locales.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-datetimepicker.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
    
  </body>
</html>