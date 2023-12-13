<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RETOLIST</title>
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
	      <a class="navbar-brand" href="index.html">RETOLIST</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
          <?php if(isset($nim) && isset($username)): ?>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="dropdown nav-item">
              <a href="<?php echo base_url().'index.php/Landpage/Profile/' ?>" class="nav-link icon d-flex align-items-center">
                <?= $nim ?> | <?= $username ?>
                <b class="caret"></b>
              </a>
              <?php else: ?>
                <li class="nav-item cta">
        <a href="<?php echo base_url().'index.php/Landpage/Login/' ?>" class="nav-link icon d-flex align-items-center">
            <i class="ion-ios-cloud-download mr-2"></i> Login
        </a>
</li>
    <?php endif; ?>
            </li>
            <li class="nav-item cta">
        <a href="<?php echo base_url().'index.php/Landpage/Logout/' ?>" class="nav-link icon d-flex align-items-center">
            <i class="ion-ios-cloud-download mr-2"></i> Logout
        </a>
</li>

	        </ul>
	      </div>
		  </div>
	  </nav>
      <br>
      <br>
      <br>
<div class="container text-center mb-3 mt-1">
    <div class="dropdown d-inline-block">
						  <button class="btn btn-primary dropdown-toggle mr-2 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    MK Wajib
						  </button>
						  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Zat_padat'?>">Fisika Zat Padat</a>
						    <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Inti'?>">Fisika Inti</a>
						    <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Statistik'?>">Fisika Statistik</a>
                            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/PK'?>">Proyek Konsultasi</a>
                            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/SPAI'?>">Seminar PAI</a>
						  </div>
              </div>
    <div class="dropdown d-inline-block">
        <button class="btn btn-danger dropdown-toggle mr-2 ml-2" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            KBK Material
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Piranti'?>">Fisika Piranti Semikonduktor</a>
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Semikonduktor'?>">Pemrosesan dan Karakterisasi Bahan Semikonduktor</a>
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Nano'?>">Nanomaterial</a>
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Superkonduktor'?>">Superkonduktor</a>
        </div>
    </div>

    <div class="dropdown d-inline-block">
        <button class="btn btn-info dropdown-toggle mr-2 ml-2" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            KBK Astronomi
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Astrofisika'?>">Astrofisika</a>
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Posisi'?>">Astronomi Posisi</a>
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Bintang'?>">Fisika Bintang</a>
        </div>
    </div>

    <div class="dropdown d-inline-block">
        <button class="btn btn-success dropdown-toggle mr-2 ml-2" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            KBK Kebumian
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3">
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Geofisika'?>">Eksplorasi Geofisika</a>
            <a class="dropdown-item" href="<?php echo base_url().'index.php/Landpage/Biofisika'?>">Analisis Data Biofisika</a>
        </div>
    </div>
</div>

    <section class="ftco-section ftco-no-pt ftco-no-pb" id="carousel">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                      </ul>

                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active img" style="background-image: url('<?= base_url('assets/images/mk_wajib.png') ?>'); height: 750px;">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text px-4 d-flex align-items-center justify-content-center">
                                    <div class="col-md-8 text w-100 text-center">
                                        <h2 class="mb-">Mata Kuliah Wajib</h2>
                                        <div class="col-md-12 mb-2">
                                            <a href="<?php echo base_url().'index.php/Landpage/Zat_padat'?>" class="btn btn-primary btn-link" role="button">Fisika Zat Padat</a>
                                            <a href="<?php echo base_url().'index.php/Landpage/Inti'?>" class="btn btn-secondary btn-link" role="button">Fisika Inti</a>
                                            <a href="<?php echo base_url().'index.php/Landpage/Statistik'?>" class="btn btn-success btn-link" role="button">Fisika Statistik</a>
                                                        <a href="<?php echo base_url().'index.php/Landpage/PK'?>" class="btn btn-danger btn-link" role="button">Proyek Konsultansi</a>
                                                        <a href="<?php echo base_url().'index.php/Landpage/SPAI'?>" class="btn btn-warning btn-link" role="button">Seminar Pendidikan Agama Islam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item img" style="background-image: url('<?= base_url('assets/images/material.png') ?>'); height: 750px;">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text px-4 d-flex align-items-center justify-content-center">
                                    <div class="col-md-8 text w-100 text-center">
                                        <h2 class="mb-4">MKKBK-Material</h2>
                                        <div class="col-md-12 mb-2">
                                            <a href="<?php echo base_url().'index.php/Landpage/Piranti'?>" class="btn btn-primary btn-link" role="button">Fisika Piranti Semikonduktor</a>
                                            <a href="<?php echo base_url().'index.php/Landpage/Semikonduktor'?>" class="btn btn-secondary btn-link" role="button">Pemrosesan dan karakterisasi Bahan Semikonduktor</a>
                                            <a href="<?php echo base_url().'index.php/Landpage/Nano'?>" class="btn btn-success btn-link" role="button">Nanomaterial</a>
                                                        <a href="<?php echo base_url().'index.php/Landpage/Superkonduktor'?>" class="btn btn-danger btn-link" role="button">Superkonduktor</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item img" style="background-image: url('<?= base_url('assets/images/astro3.png') ?>'); height: 750px;">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text px-4 d-flex align-items-center justify-content-center">
                                    <div class="col-md-8 text w-100 text-center">
                                        <h2 class="mb-4">MKKBK-Astronomi</h2>
                                        <div class="col-md-12 mb-2">
                                            <a href="<?php echo base_url().'index.php/Landpage/Astrofisika'?>" class="btn btn-primary btn-link" role="button">Astrofisika</a>
                                            <a href="<?php echo base_url().'index.php/Landpage/Posisi'?>" class="btn btn-secondary btn-link" role="button">Astronomi Posisi</a>
                                            <a href="<?php echo base_url().'index.php/Landpage/Bintang'?>" class="btn btn-success btn-link" role="button">Fisika Bintang</a>
                                        </div>            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item img" style="background-image: url('<?= base_url('assets/images/geo2.png') ?>'); height: 750px;">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row slider-text px-4 d-flex align-items-center justify-content-center">
                                    <div class="col-md-8 text w-100 text-center">
                                        <h2 class="mb-4">MKKBK-Kebumian</h2>
                                        <div class="col-md-12 mb-2">
                                            <a href="<?php echo base_url().'index.php/Landpage/Geofisika'?>" class="btn btn-primary btn-link" role="button">Eksplorasi Geofisika</a>
                                            <a href="<?php echo base_url().'index.php/Landpage/Biofisika'?>" class="btn btn-secondary btn-link" role="button">Analisis Data Geofisika</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
                </section>
                <?php
// Assuming $isi_tugas is your array of tasks

// Function to compare dates for sorting (sort in ascending order)
function compareDates($a, $b) {
    return strtotime($a['deadline']) - strtotime($b['deadline']);
}

// Sort the $isi_tugas array based on the 'tanggal' field
usort($tugas, 'compareDates');
?>

<div class="form-check d-flex justify-content-center">
    <div class="card mb-3" style="background-color: #001F3F; color: white; width: 100%;">
        <div class="card-header">Tugas</div>
        <div class="card-body">
        <a href="<?php echo base_url().'index.php/Landpage/PengajuanTugas'?>">
                            <button type="button" class="btn btn-outline-warning mr-2 ml-2">Pengajuan</button></a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="background-color: #001F3F; color: white;" id="dataTable">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Mata Kuliah</th>
                        <th>Deskripsi</th>
                        <th>Deadline</th>
                        <th>Penginput</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tugas as $chart) : ?>
                        <tr>
                            <td><?= $chart['judul_tugas'] ?></td>
                            <td><?= $chart['mata_kuliah'] ?></td>
                            <td><?= $chart['deskripsi_tugas'] ?></td>
                            <td><?= $chart['deadline'] ?></td>
                            <td><?= $chart['nim'] ?></td>
                            <td>
                                <?php if (!empty($chart['file_tugas'])) : ?>
                                    <a href="<?= base_url('assets/pdf/' . $chart['file_tugas']) ?>" download="<?= $chart['file_tugas'] ?>">
                                        <button type="button" class="btn btn-danger btn-sm">Download</button>
                                    </a>
                                <?php else : ?>
                                    <p>No file available for download.</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


    </div>
    <div class="modal fade" id="modalIsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #001F3F; color: white;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengajuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?= base_url('index.php/Landpage/input') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="judul_tugas">Judul</label>
                            <input type="text" id="judul_tugas" name="judul_tugas" placeholder="judul" class="form-control"
                                   autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="mata_kuliah">Mata Kuliah</label>
                            <input type="text" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah" class="form-control"
                                   autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="deskripsi_tugas">Deskripsi</label>
                            <input type="text" id="deskripsi_tugas" name="deskripsi_tugas" placeholder="Deskripsi" class="form-control"
                                   autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
    <div class="form-label-group">
        <label for="file_tugas">File</label>
        <input type="file" id="file_tugas" name="file_tugas" class="form-control" style="display: none">
        <br>
        <button type="button" id="fileButton" class="btn btn-primary">Choose File</button>
        <span id="selectedFileName"></span>
        <script>
            var fileInput = document.getElementById('file_tugas');
            var fileButton = document.getElementById('fileButton');
            var selectedFileName = document.getElementById('selectedFileName');

            fileButton.addEventListener('click', function () {
                fileInput.click();
            });

            fileInput.addEventListener('change', function () {
                var fileName = fileInput.value.split('\\').pop(); // Get only the file name
                selectedFileName.textContent = '' + fileName;
            });
        </script>

                    </div>
                    </div>
                    <div class="form-group">
                     <div class="form-label-group">
                      <label for="deadline">Deadline</label>
                        <input type="date" id="deadline" name="deadline" class="form-control" autocomplete="off" required>
                         </div>
                        </div>
                    <button type="submit" class="btn btn-outline-success">Add</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
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

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>

</body>
</html>