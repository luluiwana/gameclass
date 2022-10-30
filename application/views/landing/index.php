<!DOCTYPE html>
<html lang="en">

<head>
    <title>GameClass</title>
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


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target mt-2" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="" class="logo" srcset="">
            </a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Beranda</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>Tentang</span></a></li>
                    <li class="nav-item"><a href="#feature-section" class="nav-link"><span>Fitur</span></a></li>
                    <!-- <li class="nav-item"><a href="#dev-section" class="nav-link"><span>Tim Pengembang</span></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <section id="home-section" class="hero">
        <div class="row container">
            <div class="col-md-6">
                <!-- <span class="subheading">GameClass</span> -->
                <h1 class=" mt-3 font-weight-bold text-warning"><span>GameClass</span> </h1>
                <h2 class="mb-4 font-weight-bold">Cara Seru Belajar Bersama Teman Sekelas!</h2>
                <p><a href="<?= base_url() ?>auth/daftar/" class="btn btn-primary py-3 px-4 mr-3">Daftar</a> <a href="<?= base_url() ?>auth/login/" class="btn btn-white btn-outline-white py-3 px-4">Masuk</a></p>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url() ?>assets/img/vector/kids wearing masks at school-bro (2).svg" class="hero-img" alt="" srcset="">
            </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-10 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Tentang</h1>
                        <h2 class="mb-4">Tentang</h2>
                        <p><b>GameClass</b> merupakan e-learning berbasis gamifikasi dengan forum diskusi untuk menunjang kegiatan pembelajaran secara daring</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="resume-wrap text-center ftco-animate">
                            <img src="<?= base_url() ?>assets/img/game.png" alt="">
                            <h2 class="mt-4">Gamifikasi</h2>
                            <p class="mt-4">Dapatkan pengalaman belajar kamu seperti layaknya bermain game</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="resume-wrap text-center ftco-animate">
                            <img src="<?= base_url() ?>assets/img/code.png" alt="">

                            <h2 class="mt-4">Quiz Interakif</h2>
                            <p class="mt-4">Uji hasil belajar kamu dengan quiz pilihan ganda</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="resume-wrap text-center ftco-animate">
                            <img src="<?= base_url() ?>assets/img/forum.png" alt="">

                            <h2 class="mt-4">Diskusi</h2>
                            <p class="mt-4">Lakukan Diskusi bersama guru dan teman sekelas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section" id="feature-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Fitur</h1>
                    <h2 class="mb-4">Fitur</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Akses Materi 24/7</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Kerjakan Quiz</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Forum Diskusi</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Kerjakan Test</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Naikkan Level</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Dapatkan Reward</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Leaderboard</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Avatar Unik</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Manajemen Kelas (Guru)</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Kelola Materi dan Quiz (Guru)</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Akses Rekap Nilai (Guru)</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <div class="desc">
                            <h3 class="">Forum Diskusi (Guru)</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>






    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center small">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | GameClass Team
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



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