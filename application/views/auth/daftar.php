<!DOCTYPE html>
<html lang="en">

<head>
    <title>GameClass - Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/animate.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/aos.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="" class="logo" srcset="">
            </a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="<?= base_url() ?>#home-section" class="nav-link"><span>Beranda</span></a></li>
                    <li class="nav-item"><a href="<?= base_url() ?>#about-section" class="nav-link"><span>Tentang</span></a></li>
                    <li class="nav-item"><a href="<?= base_url() ?>#feature-section" class="nav-link"><span>Fitur</span></a></li>
                    <!-- <li class="nav-item"><a href="#dev-section" class="nav-link"><span>Tim Pengembang</span></a></li> -->
                </ul>
            </div>


        </div>
    </nav>
    <section id="home-section" class="login">
        <div class="row container">
            <!-- <span class="subheading">Classmate</span> -->
            <div class="col-md-5">
                <h4 class=" mt-3  font-weight-bold text-light "><span>Daftar</span> </h4>
                <h6 class="mb-4 small ">Sudah memiliki akun? <a href="<?= base_url() ?>auth/login" class="text-purple font-weight-bold">Login</a></h6>

                <div class="fw-bold text-danger small"><?php echo validation_errors(); ?></div>
                <form role="form" method="POST" class="mb-5" action="<?= base_url('auth/daftar') ?>">
                    <div class="">
                        <label class="small  font-weight-bold">Nama Lengkap</label>
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" aria-describedby="username-addon" required>
                        </div>
                        <label class="small  font-weight-bold">Email Kamu</label>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Masukkan alamat e-mail" aria-label="username" aria-describedby="username-addon" required>
                        </div>
                        <label class="small  font-weight-bold">Nomor Telepon Kamu</label>
                        <div class="mb-3">
                            <input type="tel" name="telp" class="form-control" placeholder="Masukkan Nomor Telp" aria-label="username" aria-describedby="username-addon" required>
                        </div>
                        <label class="small  font-weight-bold">Buat Password</label>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Buat Password" aria-describedby="password-addon" required autocomplete="off">
                        </div>
                        <label class="small  font-weight-bold">Konfirmasi Password</label>
                        <div class="mb-3">
                            <input type="password" name='passconf' class="form-control" placeholder="Konfirmasi Password" aria-describedby="password-addon" required autocomplete="off">
                        </div>
                        <label class="small  font-weight-bold">Daftar Sebagai</label>
                        <div class="mb-5 row">
                            <div class="form-check mr-4">
                                <input class="form-check-input" type="radio" name="userRole" id="flexRadioDefault2" value="2" required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Siswa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="userRole" id="flexRadioDefault1" value="1" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Guru
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class=" w-100 mt-5">
                        <input type="submit" class="btn btn-primary py-3 px-5 mr-3" value="Daftar Sekarang">
                    </div>



                </form>
            </div>
            <div class="col-md-7">
                <img src="<?= base_url() ?>assets/img/vector/Mobile login-bro.svg" class="w-100" alt="">

            </div>

        </div>
    </section>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="<?= base_url() ?>assets/landing/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/aos.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/scrollax.min.js"></script>

    <script src="<?= base_url() ?>assets/landing/js/main.js"></script>

</body>

</html>