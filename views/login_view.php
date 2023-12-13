<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-section ftco-section-2 section-signup page-header img"
         style="background-image: url('<?= base_url('assets/images/Re.jpg') ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <div class="card card-login py-4">
                    <form class="form-login" method="post" action="<?= base_url('index.php/Mahasiswa/login') ?>">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Login</h4>
                        </div>
                        <div class="card-body pb-4 pt-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ion-ios-contact"></i>
                                    </span>
                                </div>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ion-ios-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password..." required>
                            </div>
                        </div>
                        <div class="footer text-center mb-2">
                             <button type="submit" class="btn btn-warning btn-round px-5 btn-lg">Login</button>
                        </div>


                        <div class="form-check d-flex justify-content-center">
                            <h5> Don't have an account?</h5>
                        </div>
                        <div class="form-check d-flex justify-content-center">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalTambah">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Registration Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #001F3F; color: white;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?= base_url('index.php/Mahasiswa/register') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="nim">NIM</label>
                            <input type="text" id="nim" name="nim" placeholder="Nim" class="form-control"
                                   autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Username" class="form-control"
                                   autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password"
                                   class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Register</button>
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

    <!-- - - - - -end- - - - -  -->

    <footer class="ftco-section ftco-section-2">
        <div class="col-md-12 text-center">
            <p class="mb-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                                                                               aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


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