<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/favicon.png">
    <title>
        <?= $title ?>
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->

    <link id="pagestyle" href="<?= base_url() ?>assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url() ?>assets/css/style_forum.css" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url() ?>assets/css/editor_forum.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/user.css">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">

</head>

<body class="g-sidenav-show ">
    <aside class="sidenav navbar bg-dark navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header  ">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?= base_url() ?>guru/">
                <img src="<?= base_url() ?>assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
                <!-- <span class="ms-1 font-weight-bold text-white">Classmate</span> -->
            </a>
        </div>
        <hr class="horizontal dark mt-3">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($menu == 'Dashboard') {
                                            echo 'active';
                                        } ?>" href="<?= base_url() ?>guru">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="nav-link-text ms-1 text-light ">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($menu == 'Kelas') {
                                            echo 'active';
                                        } ?>" href="<?= base_url() ?>guru/kelas">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-chalkboard-teacher "></i>
                        </div>
                        <span class="nav-link-text ms-1 text-light">Kelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if ($menu == 'Diskusi') {
                                            echo 'active';
                                        } ?>" href="<?= base_url('DiscussionGuru') ?>">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-comments "></i>
                        </div>
                        <span class="nav-link-text ms-1 text-light">Diskusi</span>
                    </a>
                </li>


                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 text-light">Profil</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if ($menu == 'Profil') {
                                            echo 'active';
                                        } ?>" href="<?= base_url() ?>profil">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-alt "></i>
                        </div>
                        <span class="nav-link-text ms-1 text-light">Pengaturan Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="<?= base_url() ?>auth/logout">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-sign-out-alt "></i>

                        </div>
                        <span class="nav-link-text ms-1 text-light">Keluar</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">

                <h6 class="font-weight-bolder mb-0 text-light"><?= $title ?></h6>

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1 "></i>
                                <span class="d-sm-inline d-none text-light"><?=
                                                                            $this->session->userdata('nama');
                                                                            ?></span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->