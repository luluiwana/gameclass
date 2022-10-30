<!DOCTYPE html>
<html lang="en">

<head>
    <title>GameClass- Login</title>
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
            <div class="col-md-7">
                <img src="<?= base_url() ?>assets/img/vector/Mobile login-cuate.svg" class="w-80" alt="" style="position:relative">

            </div>
            <div class="col-md-5 pb-5">
                <h4 class=" mt-3  font-weight-bold text-light "><span>Login</span> </h4>
                <h6 class="mb-4 small text-secondary ">Belum memiliki akun? <a href="<?= base_url() ?>auth/daftar" class="text-purple font-weight-bold">Daftar</a></h6>

                <div class="fw-bold text-danger small"><?php echo validation_errors(); ?></div>

                <form role="form" method="POST" action="<?= base_url('auth/login/') ?>">
                    <label class="text-white">Email</label>
                    <div class=" mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                    </div>
                    <label class="text-white">Password</label>
                    <div class="mb-2">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" aria-label="Password" aria-describedby="password-addon" required>
                    </div>

                    <div class="text-left">
                        <input type="submit" class="btn btn-primary py-3 px-5 mr-3 mt-3 mb-5" value="Login">
                    </div>
                </form>
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