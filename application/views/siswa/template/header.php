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
    <link id="pagestyle" href="<?= base_url() ?>assets/css/style_forum.css" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url() ?>assets/css/editor_forum.css" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url() ?>assets/css/responsive_forum.css" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url() ?>assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/quiz.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/user.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
</head>

<body class="g-sidenav-show ">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header  ">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?= base_url() ?>siswa/">
                <img src="<?= base_url() ?>assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
                <!-- <span class="ms-1 font-weight-bold text-white">Classmate</span> -->
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($menu == 'Dashboard') {
                                            echo 'active';
                                        } ?>" href="<?= base_url() ?>siswa">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white ">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($menu == 'Kelas') {
                                            echo 'active';
                                        } ?>" href="<?= base_url() ?>siswa/kelas">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-chalkboard-teacher "></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Kelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if ($menu == 'Diskusi') {
                                            echo 'active';
                                        } ?>" href="<?= base_url('discussion') ?>">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-comments "></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Diskusi</span>
                    </a>
                </li>


                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 text-white">Profil</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if ($menu == 'Profil') {
                                            echo 'active';
                                        } ?>" href="<?= base_url() ?>profil/">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-alt "></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Pengaturan Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="<?= base_url() ?>auth/logout">
                        <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-sign-out-alt "></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Keluar</span>
                    </a>
                </li>
                <li class="nav-item mt-5">

                    <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                        <img class="img-fluid" width='70%' src="<?= base_url('assets/img/um-putih.png') ?>" style='opacity:0.9;border-radius:100px'></img>
                    </div>

                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">

                <h6 class="font-weight-bolder mb-0 text-white"><?= $title ?></h6>

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <span class="nav-link text-body font-weight-bold px-0">
                                <!-- <i class="fa fa-user me-sm-1 text-white"></i> -->

                                <?php if ($user->LevelID == 0) : ?>
                                    <span class='d-inline-block w-auto> <button
                                        class=' btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1-gs.png' alt='' style='width:30px'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 1) : ?>
                                    <span class='d-inline-block w-auto'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1.png' alt='' style='width:30px'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 2) : ?>
                                    <span class='d-inline-block w-auto'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/2.png' alt='' style='width:30px'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 3) : ?>
                                    <span class='d-inline-block w-auto'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/3.png' alt='' style='width:30px'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 4) : ?>
                                    <span class='d-inline-block w-auto'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/4.png' alt='' style='width:30px'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 5) : ?>
                                    <span class='d-inline-block w-auto'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/5.png' alt='' style='width:30px'></button>
                                    </span>
                                <?php endif; ?>
                            </span>
                        </li>
                        <li class="nav-item d-flex align-items-center ms-2">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <!-- <i class="fa fa-user me-sm-1 text-white"></i> -->
                                <img src="<?= base_url() ?>media/avatar/<?= $this->session->userdata('ava') ?>" id="ava-header">
                                <span class="d-sm-inline d-none text-white"><?=
                                                                            $this->session->userdata('nama');
                                                                            ?></span>
                            </a>
                        </li>

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-light"></i>
                                    <i class="sidenav-toggler-line bg-light"></i>
                                    <i class="sidenav-toggler-line bg-light"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->