<div class="container-fluid py-4">
    <div class="row ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?=base_url()?>guru/kelas"
                        class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?=base_url()?>guru/course/<?=$CourseID?>"
                        class="text-primary fw-bold"><?=$CourseName?></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $lesson['LessonTitle'] ?>
                </li>
            </ol>
        </nav>
    </div>
    <div class="row mx-0">
        <div class="card">
            <div class="card-body p-0 py-2">
                <a href="<?=base_url()?>guru/course/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Kelas"){echo "active-menu";}?>">Kelas</a>
                <a href="<?=base_url()?>guru/aktivitas/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Aktivitas"){echo "active-menu";}?>">Aktivitas</a>
                <a href="<?=base_url()?>guru/rekap/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Rekap Nilai"){echo "active-menu";}?>">Rekap
                    Nilai</a>
                <a href="<?=base_url()?>guru/siswa/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Daftar Siswa"){echo "active-menu";}?>">Daftar
                    Siswa</a>
                <a href="<?=base_url()?>guru/pengaturan/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Pengaturan"){echo "active-menu";}?>">Pengaturan</a>
            </div>
        </div>
    </div>
    <p class="fw-bold text-white small mt-4 text-uppercase"> <i class="fas fa-dot-circle text-warning me-1"></i>materi</p>
    <div class="row mt-1">
        <div class="col-md-9 mt-2">

            <div class="card">
                <div class="card-body">

                    <p class="text-white fw-bold fs-2 mb-4"><?= $lesson['LessonTitle'] ?>
                    </p>

                    <div class="text-white"><?= $lesson['LessonContent'] ?></div>

                </div>
            </div>
        </div>

        <div class="col-md-3 mt-2">
            <?php if (!empty($lesson['File'])) { ?>
            <div class="card mb-2 bg-darkpurple">
                <div class="card-body ">
                    <p class="text-white fw-bold fs-5">Berkas Lampiran</p>
                    <p class="text-white mt-3"><i class="fas fa-file me-2"></i> <?=$lesson['File']?> </p>
                    <a href="<?= base_url('assets/lesson/' . $lesson['File']) ?>" target="_blank"
                        class="btn btn-primary"><i class="fas fa-download me-2"></i> Download</a>
                </div>
            </div>
            <?php } ?>
            <div class="card card-body bg-darkgreen mb-2">
                <h1 class="text-white"><?=$countUserLesson?></h1>
                <p class="text-white small">Siswa telah membaca materi</p>
                <a href="<?=base_url()?>guru/result/<?=$lesson['LessonID']?>/<?=$CourseID?>"
                    class="btn btn-warning mt-3"><i class="fas fa-eye me-2"></i> Lihat </a>
            </div>
            <a class="btn btn-warning  "
                href="<?= base_url('guru/editLesson/' . $CourseID . '/' . $lesson['LessonID']) ?>">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a class="btn btn-danger "
                href="<?= base_url('guru/deleteLesson/' . $CourseID . '/' . $lesson['LessonID']) ?>">
                <i class="fas fa-trash"></i> Hapus
            </a>
        </div>
    </div>



</div>