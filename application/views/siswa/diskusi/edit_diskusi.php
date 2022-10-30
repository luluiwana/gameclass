<div class="container-fluid">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?=base_url()?>discussion" class="text-primary fw-bold">Diskusi</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?=base_url()?>discussion/all/<?=$CourseID?>" class="text-primary fw-bold">Diskusi
                        <?=$CourseName?></a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?=base_url()?>discussion/detail_discussion/<?=$thread->ForumQID?>/<?=$thread->CourseID?>"
                        class="text-primary fw-bold"> <?=$thread->UserName?></a>
                </li>
                <li class="breadcrumb-item active">
                    Edit Diskusi
                </li>
            </ol>
        </nav>
    </div>
    <div class="row ms-2">
        <div class="card-forum  p-0">
            <form action="<?=base_url()?>discussion/editdiskusi__/<?=$thread->ForumQID?>/<?=$thread->CourseID?>"
                method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <textarea name="content" id="add_question" class=" form-control" required>
                     <?= $thread->ForumQContent ?>
                </textarea>
                </div>
                <div class="form-group row px-3">
                    <div class="w-50">
                        <select name="kategori" class="form-control  border-0 bg-primary fw-bold " style="width:auto"
                            required>
                            <option value="">Pilih Kategori</option>
                            <option value="Pengumuman" <?php if($thread->category=="Pengumuman"){echo "selected";}?>>
                                Pengumuman</option>
                            <option value="Tugas" <?php if($thread->category=="Tugas"){echo "selected";}?>>Tugas
                            </option>
                            <option value="Pertanyaan" <?php if($thread->category=="Pertanyaan"){echo "selected";}?>>
                                Pertanyaan</option>
                        </select>
                    </div>

                    <div class="w-50">
                        <input type="hidden" name="courseid" value="">
                        <input type="submit" class="btn bg-warning float-end" value="Kirim">
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>