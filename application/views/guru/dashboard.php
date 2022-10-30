<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-7">
            <div class="card bg-darkpurple">
                <div class="card-body row">
                    <p class="text-white fw-bold text-uppercase mb-0"><?= $this->session->userdata('nama'); ?>
                    </p>
                    <p class="text-warning fw-bolder fs-4">GURU</p>
                    <hr>
                    <div class="row text-white small">
                        <div class="col-md-3 w-50">
                            Kelas <p class="fw-bold fs-4"> <?= $countCourse ?></p>
                        </div>
                        <div class="col-md-3 w-50">
                            Siswa <p class="fw-bold fs-4"> <?= $countSiswa ?></p>
                        </div>
                        <div class="col-md-3 w-50">
                            Materi <p class="fw-bold fs-4"><?= $countTeacherLesson ?></p>
                        </div>
                        <div class="col-md-3 w-50">
                            Quiz <p class="fw-bold fs-4"><?= $countTeacherQuiz ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12 d-none d-sm-block">
                    <div class="card h-100 p-3">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h5 class="text-white font-weight-bolder mb-5 pt-2">Forum Diskusi</h5>

                                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?= base_url() ?>DiscussionGuru">
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
                    <a href="<?= base_url() ?>guru/course/<?= $row->CourseID ?>">
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
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-2">
                <a href="<?= base_url() ?>guru/kelas" class="btn btn-warning me-md-2" type="button">Lihat Semua Kelas</a>
            </div>
        <?php else : ?>
            <div class="card">
                <div class="card-body">
                    <p>Anda belum membuat kelas</p>
                    <a href="<?= base_url() ?>guru/buatkelas" class="btn btn-warning ml-3 mt-3">Buat Kelas</a>
                </div>
            </div>
        <?php endif; ?>

    </div>

</div>
</main>