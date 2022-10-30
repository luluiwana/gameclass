<div class="container-fluid mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="<?=base_url()?>siswa/kelas"
                    class="text-primary fw-bold">Kelas</a></li>
            <li class="breadcrumb-item " aria-current="page"><a
                    href="<?=base_url()?>lesson/course/<?=$lesson->ID_Course?>" class="text-primary fw-bold"><?=$course->CourseName?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?=$title?> <?=$lesson->LessonTitle?>
            </li>
        </ol>
    </nav>
     <div class="row mx-0">
        <div class="card">
            <div class="card-body p-0 py-2">
                <a href="<?=base_url()?>lesson/course/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Kelas"){echo "active-menu";}?>">Misi</a>
                    <a href="<?=base_url()?>siswa/leaderboard/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Leaderboard"){echo "active-menu";}?>">Leaderboard</a>
                <a href="<?=base_url()?>siswa/aktivitas/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Aktivitas"){echo "active-menu";}?>">Aktivitas</a>
                <a href="<?=base_url()?>siswa/teman/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Teman"){echo "active-menu";}?>">Teman </a>
                <a href="<?=base_url()?>siswa/informasi/<?=$course->CourseID?>"
                    class="btn btn-disabled mb-0 course-menu shadow-none <?php if($course_menu=="Informasi"){echo "active-menu";}?>">Informasi</a>
               
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body text-white">
            <p class="text-white fw-bolder fs-3"><?=$lesson->LessonTitle?></p>
            <hr>
            <p class="text-white"><?=$lesson->LessonContent?></p>
        </div>
    </div>
    <?php if($lesson->File!=""):?>
    <div class="card mt-4">
        <div class="card-body">
            <p class="text-white fw-bold fs-5">Berkas Lampiran</p>
            <p class="text-white"><i class="fas fa-file me-2"></i> <?=$lesson->File?> </p>
            <a href="<?= base_url('assets/lesson/' . $lesson->File) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-download me-2"></i> Download</a>
        </div>
    </div>
    <?php endif;?>
    <?php if($check==0):?>
    <form action="<?=base_url()?>Lesson/complete/" method="post">
        <input type="hidden" name="lesson" value="<?=$lesson->LessonID?>">
        <input type="hidden" name="course" value="<?=$lesson->ID_Course?>">
        <input type="submit" class="form-control  bg-warning btn btn-warning mt-4 text-wrap" value="Saya sudah mempelajari <?=$lesson->LessonTitle?>">
    </form>
    <?php else:?>
    <a href="<?=base_url()?>lesson/course/<?=$lesson->ID_Course?>" class="btn btn-primary mt-4">Kembali</a>
    <?php endif;?>
</div>
</div>
</main>