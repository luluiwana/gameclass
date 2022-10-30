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
<div class="container-fluid py-4">
    <div class="row mx-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" class="text-primary fw-bold"><?= $course->CourseName ?></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/rekap/<?= $course->CourseID ?>" class="text-primary fw-bold">Rekap
                        Nilai</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $quiz->QuizTitle ?>
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
    <p class="fw-bold text-white small mt-4 text-uppercase"> <i class="fas fa-dot-circle text-warning me-1"></i>REKAP NILAI <?= $type . ' ' . $quiz->QuizTitle ?></p>
    <div class="row mx-0 ">
        <?php if (!empty($siswa)) : ?>
            <div class="card mt-3 bg-darkblue ">
                <div class="card-body overflow-auto">
                    <table class="table table-hover mt-3" id="daftar_siswa">
                        <thead>
                            <th>No</th>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>Selesai</th>
                            <th>Reward</th>
                            <?php if ($type == "Essay" || $type == "Tugas") : ?>
                                <th>Status</th>
                            <?php endif; ?>
                            <th>Opsi</th>
                        </thead>
                        <tbody>
                            <?php $x = 1;
                            foreach ($siswa as $row) : ?>
                                <tr>
                                    <td><?= $x ?></td>

                                    <td><img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" class="small-ava" alt="">
                                    </td>
                                    <td><?= $row->UserName ?></td>
                                    <td><?= $row->result ?></td>
                                    <td><?= date("d M Y (H:i", strtotime($row->time_taken));  ?> WIB)</td>
                                    <td> <i class="fas fa-star text-warning"></i> <?= $row->addXP ?>XP</td>
                                    <?php if ($type == "Essay" || $type == "Tugas") : ?>
                                        <td>
                                            <?php if ($row->result == 0 && $row->addXP == 0) : ?>
                                                <span class="text-warning small">Belum dinilai</span>
                                            <?php else : ?>
                                                <span class="text-success small">Sudah dinilai</span>

                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
                                    <td><a href="<?= base_url() ?>guru/answer/<?= $quiz->QuizID ?>/<?= $course->CourseID ?>/<?= $row->UserID ?>" class="btn btn-warning btn-sm">Lihat jawaban</a>
                                </tr>
                                </tr>
                            <?php $x++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php else : ?>
            <div class="card mt-3 bg-darkblue card-body">
                Belum ada yang mengerjakan
            </div>
        <?php endif; ?>
    </div>

</div>

</div>
</main>