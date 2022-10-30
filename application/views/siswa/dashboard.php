<div class="container-fluid py-4">

    <div class="row">
        <div class="col-md-7">
            <div class="card bg-darkpurple">
                <div class="card-body row">
                    <div class="col-md-7">
                        <p class="text-white fw-bold text-uppercase mb-0"><?= $user->UserName ?>
                        </p>
                        <p class="text-warning fw-bolder fs-2 text-uppercase"><?= $user->desc ?></p>
                        <hr>
                        <div class="row text-white small">
                            <div class="col-md-3 w-50">
                                Kelas <p class="fw-bold fs-4"><?= $countCourse ?></p>
                            </div>
                            <div class="col-md-3 w-50">
                                Tantangan <p class="fw-bold fs-4"><?= $completed_mission ?>/<?= $total_mission ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-white small">
                            <p>Lencana</p>


                            <!-- start badges -->
                            <div class="">
                                <?php if ($user->LevelID == 0) : ?>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pemula' data-bs-content='Raih 500XP untuk mendapatkan lencana PEMULA'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petualang' data-bs-content='Raih 1000XP untuk mendapatkan lencana PETUALANG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/2-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pejuang' data-bs-content='Raih 2000XP untuk mendapatkan lencana PEJUANG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/3-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petarung' data-bs-content='Raih 4000XP untuk mendapatkan lencana PETARUNG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/4-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Master' data-bs-content='Raih 8000XP untuk mendapatkan lencana MASTER'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/5-gs.png' alt='' class='w-100'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 1) : ?>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pemula' data-bs-content='Penghargaan karena kamu telah mencapai 500XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petualang' data-bs-content='Raih 1000XP untuk mendapatkan lencana PETUALANG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/2-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pejuang' data-bs-content='Raih 2000XP untuk mendapatkan lencana PEJUANG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/3-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petarung' data-bs-content='Raih 4000XP untuk mendapatkan lencana PETARUNG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/4-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Master' data-bs-content='Raih 8000XP untuk mendapatkan lencana MASTER'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/5-gs.png' alt='' class='w-100'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 2) : ?>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pemula' data-bs-content='Penghargaan karena kamu telah mencapai 500XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petualang' data-bs-content='Penghargaan karena kamu telah mencapai 1000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/2.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pejuang' data-bs-content='Raih 2000XP untuk mendapatkan lencana PEJUANG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/3-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petarung' data-bs-content='Raih 4000XP untuk mendapatkan lencana PETARUNG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/4-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Master' data-bs-content='Raih 8000XP untuk mendapatkan lencana MASTER'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/5-gs.png' alt='' class='w-100'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 3) : ?>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pemula' data-bs-content='Penghargaan karena kamu telah mencapai 500XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petualang' data-bs-content='Penghargaan karena kamu telah mencapai 1000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/2.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pejuang' data-bs-content='Penghargaan karena kamu telah mencapai 2000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/3.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petarung' data-bs-content='Raih 4000XP untuk mendapatkan lencana PETARUNG'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/4-gs.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Master' data-bs-content='Raih 8000XP untuk mendapatkan lencana MASTER'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/5-gs.png' alt='' class='w-100'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 4) : ?>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pemula' data-bs-content='Penghargaan karena kamu telah mencapai 500XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petualang' data-bs-content='Penghargaan karena kamu telah mencapai 1000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/2.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pejuang' data-bs-content='Penghargaan karena kamu telah mencapai 2000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/3.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petarung' data-bs-content='Penghargaan karena kamu telah mencapai 4000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/4.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Master' data-bs-content='Raih 8000XP untuk mendapatkan lencana MASTER'>
                                        <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/5-gs.png' alt='' class='w-100'></button>
                                    </span>
                                <?php elseif ($user->LevelID == 5) : ?>
                                    <span class='d-inline-block w-15 example-popover' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pemula' data-bs-content='Penghargaan karena kamu telah mencapai 500XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/1.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petualang' data-bs-content='Penghargaan karena kamu telah mencapai 1000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/2.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Pejuang' data-bs-content='Penghargaan karena kamu telah mencapai 2000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/3.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Petarung' data-bs-content='Penghargaan karena kamu telah mencapai 4000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/4.png' alt='' class='w-100'></button>
                                    </span>
                                    <span class='d-inline-block w-15' tabindex='0' data-bs-toggle='popover' data-bs-placement="top" data-bs-trigger='hover focus' title='Lencana Master' data-bs-content='Penghargaan karena kamu telah mencapai 8000XP'> <button class='btn m-0 p-0' type='button' disabled> <img src='<?= base_url() ?>assets/badge/5.png' alt='' class='w-100'></button>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <!-- end badges -->
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url() ?>assets/character/<?= $user->LevelID ?>.png" class="character" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="card bg-darkgreen">
                        <div class="card-body anime-xp">
                            <p class="text-white fw-bold small"> <i class="fas fa-dot-circle text-success me-1"></i>
                                TOTAL XP</p>
                            <input type="text" value="" class="w-100 anime text-white fw-bold fs-2 text-center" disabled>

                        </div>
                        <input type="hidden" value="<?= $total_xp ?>" id="total_xp">
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card bg-darkgreen">
                        <div class="card-body anime-level">
                            <p class="text-white fw-bold small"> <i class="fas fa-dot-circle text-success me-1"></i>LEVEL</p>
                            <input type="text" value="" class="w-100 anime text-white fw-bold fs-2 text-center" disabled>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $user->LevelID ?>" id="level">
                </div>

                <div class="col-md-6 mt-3 d-none d-sm-block">
                    <div class="card h-100 p-3">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2">Forum Diskusi</h5>

                                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?= base_url() ?>discussion">
                                    Jelajahi Forum
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <h6 class="text-white font-weight-bolder mb-2 pt-2">Kelas Terbaru</h6>
        <?php if (!empty($courseList)) : ?>

            <?php foreach ($courseList as $row) : ?>
                <div class="col-md-4 mt-2">
                    <a href="<?= base_url() ?>lesson/course/<?= $row->CourseID ?>">
                        <div class="card course-link">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-3 text-center course-logo my-auto">
                                        <img src="<?= base_url() ?>media/logo/<?= $row->CourseLogo ?>" class="w-100 " alt="">
                                    </div>
                                    <div class="col-md-9 course-info">
                                        <p class=" text-light fw-bold mb-0"><?= $row->CourseName ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                <a href="<?= base_url() ?>siswa/kelas" class="btn btn-warning me-md-2" type="button">Lihat Semua Kelas</a>
            </div>

        <?php else : ?>
            <div class="card">
                <div class="card-body">
                    <p>Kamu belum mendaftar kelas apapun</p>
                    <a href="<?= base_url() ?>siswa/carikelas" class="btn btn-warning ml-3 mt-3">Temukan Kelas</a>
                </div>
            </div>
        <?php endif; ?>

    </div>

</div>
</main>