<?php if ($quiz->QuizType == 1) {
    $type = "Quiz";
} elseif ($quiz->QuizType == 2) {
    $type = "Tes";
} elseif ($quiz->QuizType == 3) {
    $type = "Essay";
} elseif ($quiz->QuizType == 4) {
    $type = "Tugas";
}

?>
<div class="container fluid py-4">
    <div class="row mx-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" class="text-primary fw-bold"><?= $course->CourseName ?></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/rekap/<?= $course->CourseID ?>" class="text-primary fw-bold">Rekap
                        Nilai</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/resultquiz/<?= $course->CourseID ?>/<?= $hasil->QuizID ?>" class="text-primary fw-bold"><?= $quiz->QuizTitle ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $hasil->UserName ?>
                </li>
            </ol>
        </nav>
    </div>
    <div class="row mx-0">
        <div class="card">
            <div class="card-body p-0 py-2">
                <a href="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" class="btn btn-disabled mb-0 course-menu shadow-none <?php if ($course_menu == "Kelas") {
                                                                                                                                            echo "active-menu";
                                                                                                                                        } ?>">Kelas</a>
                <a href="<?= base_url() ?>guru/aktivitas/<?= $course->CourseID ?>" class="btn btn-disabled mb-0 course-menu shadow-none <?php if ($course_menu == "Aktivitas") {
                                                                                                                                            echo "active-menu";
                                                                                                                                        } ?>">Aktivitas</a>
                <a href="<?= base_url() ?>guru/rekap/<?= $course->CourseID ?>" class="btn btn-disabled mb-0 course-menu shadow-none <?php if ($course_menu == "Rekap Nilai") {
                                                                                                                                        echo "active-menu";
                                                                                                                                    } ?>">Rekap
                    Nilai</a>
                <a href="<?= base_url() ?>guru/siswa/<?= $course->CourseID ?>" class="btn btn-disabled mb-0 course-menu shadow-none <?php if ($course_menu == "Daftar Siswa") {
                                                                                                                                        echo "active-menu";
                                                                                                                                    } ?>">Daftar
                    Siswa</a>
                <a href="<?= base_url() ?>guru/pengaturan/<?= $course->CourseID ?>" class="btn btn-disabled mb-0 course-menu shadow-none <?php if ($course_menu == "Pengaturan") {
                                                                                                                                                echo "active-menu";
                                                                                                                                            } ?>">Pengaturan</a>
            </div>
        </div>
    </div>

    <div class="row mx-0">
        <p class="fw-bold text-white small mt-4 text-uppercase"> <i class="fas fa-dot-circle text-warning me-1"></i> identitas</p>
        <div class="card card-body mt-3">
            <table class="d-block text-white">
                <tr>
                    <td>Judul Soal</td>
                    <td>:</td>
                    <td><?= $quiz->QuizTitle ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $hasil->UserName ?></td>
                </tr>
                <tr>
                    <td>Selesai</td>
                    <td>:</td>
                    <td><?= date("d M Y (H:i", strtotime($hasil->time_taken));  ?> WIB)</td>
                </tr>
                <tr>
                    <td class="pe-5">Reward</td>
                    <td class="pe-2">:</td>
                    <td><?= $hasil->addXP ?>XP</td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td>
                        <?= $hasil->result ?></td>
                </tr>
                <?php if ($type == "Essay" || $type == "Tugas") : ?>
                    <tr>
                        <td>Komentar</td>
                        <td>:</td>
                        <td>
                            <?= $hasil->comment ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#edit_nilai">Ubah Nilai</a>
                            <div class="modal" id="edit_nilai" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <span class="text-white fw-bolder">Edit Nilai</span>
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <hr>
                                            <form action="<?= base_url('guru/edit_nilai/' . $course->CourseID . '/' . $hasil->QuizID . '/' . $hasil->UserID) ?>" method="post">

                                                <div class="col-12">
                                                    <label class="">Nilai </label>
                                                    <input type="number" name="nilai" min="0" max="100" value="<?= $hasil->result ?>" required class="form-control">
                                                    <label class="">Komentar </label>
                                                    <textarea name="comment" class="form-control  text-white" rows="5" required><?= $hasil->comment ?></textarea>
                                                    <input type="submit" name="processed" value="Simpan" class="form-control btn btn-primary" id="inputCity">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>

            </table>
        </div>
        <p class="fw-bold text-white small mt-4 text-uppcercase"> <i class="fas fa-dot-circle text-warning me-1"></i> HASIL
            JAWABAN <?= $quiz->QuizTitle ?></p>
        <?php if ($type == "Quiz" || $type == "Tes") : ?>
            <div class="card bg-darkblue card-body mt-3">
                <?php $x = 1;
                foreach ($feedback as $row) : ?>
                    <?php $t = $row->TrueOption;
                    $a = $row->answer; ?>
                    <p class="text-white mb-1 fs-6 fw-bold "><?= $x ?>. <?= $row->Question ?>
                    </p>
                    <?php if ($row->question_img != null) : ?>
                        <a href="<?= base_url() ?>media/soal/<?= $row->question_img ?>" target="_blank">
                            <img src="<?= base_url() ?>media/soal/<?= $row->question_img ?>" style="height:200px" class="rounded ms-3" alt="">
                        </a>
                    <?php endif; ?>
                    <div class="mb-4 ms-3">
                        <p class=" <?php if ($t == $a && $a == 'A') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'A') {
                                        echo 'text-white';
                                    } elseif ($t == 'A') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-white';
                                    } ?>">
                            A. <?= $row->OptionA ?>
                            <?php if ($t == 'A') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'A') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'B') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'B') {
                                        echo 'text-white';
                                    } elseif ($t == 'B') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-white';
                                    } ?>">
                            B. <?= $row->OptionB ?>
                            <?php if ($t == 'B') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'B') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'C') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'C') {
                                        echo 'text-white';
                                    } elseif ($t == 'C') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-white';
                                    } ?>">
                            C. <?= $row->OptionC ?>
                            <?php if ($t == 'C') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'C') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'D') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'D') {
                                        echo 'text-white';
                                    } elseif ($t == 'D') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-white';
                                    } ?>">
                            D. <?= $row->OptionD ?>
                            <?php if ($t == 'D') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'D') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'E') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'E') {
                                        echo 'text-white';
                                    } elseif ($t == 'E') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-white';
                                    } ?>">
                            E. <?= $row->OptionE ?>
                            <?php if ($t == 'E') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'E') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                    </div>


                <?php $x++;
                endforeach; ?>

            </div>
        <?php elseif ($type == "Essay") : ?>
            <div class="col-md-12 mt-4">

                <?php $x = 1;
                foreach ($feedback_essay as $row) : ?>
                    <div class="card card-body bg-darkblue mb-3">
                        <p class="text-warning small text-uppercase">pertanyaan no <?= $x ?></p>
                        <p class="text-white small"> <?= $row->Question ?></p>
                        <?php if ($row->question_img != null) : ?>
                            <a href="<?= base_url() ?>media/essay/<?= $row->question_img ?>" target="_blank">
                                <img src="<?= base_url() ?>media/essay/<?= $row->question_img ?>" style="width:50%" class="rounded ms-3" alt="">
                                <p class="ps-3 small mb-3">Klik gambar untuk memperbesar</p>
                            </a>
                        <?php endif; ?>
                        <p class="p-3 bg-dark text-secondary small"> <?= $row->Answer ?></p>
                    </div>
                <?php $x++;
                endforeach; ?>
            </div>
        <?php elseif ($type == "Tugas") : ?>
            <div class="col-md-12 mt-4">
                <?php foreach ($feedback_essay as $row) : ?>
                    <div class="card card-body bg-darkblue mb-3">
                        <p class="text-warning small text-uppercase">pertanyaan</p>
                        <p class="text-white h6"><?= $row->Question ?></p>
                        <?php if ($row->question_img != null) : ?>
                            <a href="<?= base_url() ?>media/tugas/<?= $row->question_img ?>" target="_blank">
                                <img src="<?= base_url() ?>media/tugas/<?= $row->question_img ?>" style="width:50%" class="rounded ms-3" alt="">
                                <p class="ps-3 small mb-3">Klik gambar untuk memperbesar</p>
                            </a>
                        <?php endif; ?>
                        <a href="<?= base_url('media/tugas_siswa/' . $row->File) ?>" target="_blank" class="btn btn-primary btn-lg mt-3 w-50">Download jawaban <?= $hasil->UserName ?></a>
                    </div>
                <?php
                endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>
</main>