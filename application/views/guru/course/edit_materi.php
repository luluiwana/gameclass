<div class="container-fluid py-4">
    <div class="row ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?=base_url()?>guru/kelas"
                        class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?=base_url()?>guru/course/<?=$id?>"
                        class="text-primary fw-bold"><?=$CourseName?></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Edit Materi: <?= $lesson['LessonTitle'] ?>
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
    <p class="fw-bold text-white small mt-4 text-uppercase"> <i class="fas fa-dot-circle text-warning me-1"></i>edit materi</p>

    <div class="card card-body mt-3">

        <form action="<?= base_url('guru/editLessonCourse/' . $id . '/' . $lesson['LessonID']) ?>" method="post"
            enctype="multipart/form-data">

            <div class="form-group ">
                <label class="">Judul Materi</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control text-white" name="title"
                        value='<?= $lesson['LessonTitle'] ?>' placeholder="Judul Artikel" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="">File </label>
                <div class="col-md-8">
                    <input type="file" name="file" class='form-control  text-white'>
                </div>
            </div>

            <div class="form-group row">
                <label class="">Isi Materi </label>
                <textarea name="content" id="add_materi" class="text-lights form-control" cols="30" rows="30" required>
                <?= $lesson['LessonContent'] ?>
                </textarea>
            </div>

            <div class="form-group row">
                <input type="submit" class="btn btn-primary float-right ml-auto pl-5 pr-5" value="Simpan">
            </div>
        </form>
    </div>
</div>