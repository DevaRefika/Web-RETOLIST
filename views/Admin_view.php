<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pengajuan Catatan</title>
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
	      <a class="navbar-brand" href="index.html">Pengajuan Catatan</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center">
                <i class="ion-ios-apps mr-2"></i>
               User Setting
                <b class="caret"></b>
              </a>
              
	          <li class="nav-item cta"><a href="<?php echo base_url().'index.php/Admin/logout'?>" class="nav-link icon d-flex align-items-center"><i class="ion-ios-cloud-download mr-2"></i> Log Out</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    <br>
<br>
<br>
<br>
<br>
<br>
<a href="<?php echo base_url().'index.php/Admin/PengajuanTugas'?>">
<button type="button" class="btn btn-outline-danger">Pengajuan Tugas</button></a>
<a href="<?php echo base_url().'index.php/Admin/Mahasiswa'?>">
<button type="button" class="btn btn-outline-danger">Mahasiswa</button></a>
<br>
<br>
<div class="form-check d-flex justify-content-center">
    <div class="card mb-3" style="background-color: #001F3F; color: white; width: 100%;">
        <div class="card-header">Pengajuan Catatan</div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="background-color: #001F3F; color: white;" id="dataTable">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Mata Kuliah</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengajuan_catatan as $chart) : ?>
                        <tr>
                            <td><?= $chart['judul'] ?></td>
                            <td><?= $chart['mata_kuliah'] ?></td>
                            <td><?= $chart['deskripsi'] ?></td>
                            <td><?= $chart['tanggal'] ?></td>
                            <td>
                                <?php if (!empty($chart['file'])) : ?>
                                    <a href="<?= base_url('assets/pdf/' . $chart['file']) ?>" download="<?= $chart['file'] ?>">
                                        <button type="button" class="btn btn-danger btn-sm">Download</button>
                                    </a>
                                <?php else : ?>
                                    <p>No file available for download.</p>
                                <?php endif; ?>
                            </td>
                            <td>
                            <a href="<?php echo base_url().'index.php/Admin/acceptCatatan/'.$chart['id_pengajuancatatan']; ?>">
                            <button type="button" class="btn btn-success">Accept</button>
                                </a>
                                <a href="<?php echo base_url().'index.php/Admin/rejectCatatan/'.$chart['id_pengajuancatatan']; ?>">
                            <button type="button" class="btn btn-danger">Reject</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
		
<!-- Include SweetAlert library (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Check for success flash message -->
<?php if ($this->session->flashdata('success')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '<?= $this->session->flashdata('success') ?>',
        });
    </script>
<?php endif; ?>

<!-- Check for error flash message -->
<?php if ($this->session->flashdata('error')): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '<?= $this->session->flashdata('error') ?>',
        });
    </script>
<?php endif; ?>

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