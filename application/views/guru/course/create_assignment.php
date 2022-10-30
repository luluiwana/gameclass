<div class="container-fluid py-4">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" class="text-primary fw-bold">
                        <?= $course->CourseName ?> - <?= $course->ClassName ?>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Buat Soal
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

    <p class="fw-bold text-white small mt-4 text-uppercase"> <i class="fas fa-dot-circle text-warning me-1"></i>Buat
        Soal</p>
<div class="row">
    <div class="col-md-6 card card-body bg-darkpurple m-2 mt-3">
        <form id="add-Soal" method="post" action="<?= base_url('guru/create_quiz/' . $courseID . '/' . $id) ?>" enctype="multipart/form-data">
            <label for="judul">Judul Soal</label>
            <input type="text" name='judul' class="form-control " required>
            <div class="form-group">
                <label for="quiz-type">Tipe Soal</label>

                <select name="quiz-type" class="form-control" required>
                    <option value="">---Pilih---</option>
                    <option value="1">Quiz (Pilihan Ganda)</option>
                    <option value="2">Tes (Pilihan Ganda)</option>
                    <option value="3">Essay</option>
                    <option value="4">Tugas Upload</option>
                </select>
            </div>

            <input type="submit" class="btn btn-primary float-right ml-auto mt-3" value="Buat Soal">
        </form>


    </div>
    <div class="col-md-4 card card-body bg-darkgreen m-2 mt-3">
    <p class="fw-bold text-white small text-uppercase"> </i>Keterangan</p>
        <ol class="small text-white mt-3">
            <li> <span class="fw-bold text-warning">Quiz</span>: Siswa dapat mengetahui nilai dan kunci jawaban setelah mengerjakan</li>
            <li><span class="fw-bold text-warning">Tes</span>: Siswa tidak dapat mengetahui nilai dan kunci jawaban</li>
            <li><span class="fw-bold text-warning">Essay</span>: Soal uraian</li>
            <li><span class="fw-bold text-warning">Tugas Upload</span>: Jenis soal yang mengharuskan siswa mengunggah file tertentu</li>
        </ol>

    </div>
    </div>

</div>