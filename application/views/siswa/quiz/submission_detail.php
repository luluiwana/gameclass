<div class="row mx-4 mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>siswa/kelas" class="text-primary fw-bold">Kelas</a></li>
            <li class="breadcrumb-item " aria-current="page"><a href="<?= base_url() ?>lesson/course/<?= $CourseID ?>" class="text-primary fw-bold">Basis
                    Data</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?= $quiz->QuizTitle ?>
            </li>
        </ol>
    </nav>
    <div class="card bg-darkpurple">
        <div class="card-body">
            <div class="row" id="start" style="display:flex">
                <div class="bg-warning text-white fw-bold  p-2 small" style="margin-top:-2rem"> <i class="fas fa-star "></i> Reward hingga 500 XP</div>

                <div class="col-md-10 my-auto">
                    <p class="h3 text-white text-uppercase mt-4"><?= $quiz->QuizTitle ?></p>
                    <?php foreach ($question as $row) : ?>
                        <p class="text-white h6"><?= $row->Question ?></p>
                        <?php if ($row->question_img != null) : ?>
                            <a href="<?= base_url() ?>media/tugas/<?= $row->question_img ?>" target="_blank">
                                <img src="<?= base_url() ?>media/tugas/<?= $row->question_img ?>" class="rounded ms-3 w-80 mt-2" alt="">
                                <p class="ps-3 small mb-3">Klik gambar untuk memperbesar</p>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>


        </div>
    </div>
    <div class="card bg-darkpurple my-4">
        <div class="card-body">
            <div class="row" id="start" style="display:flex">
                <div class="bg-warning text-white fw-bold  p-2 small" style="margin-top:-2rem"> <i class="fas fa-star "></i> Upload Tugas</div>
                <form enctype='multipart/form-data' action="<?= base_url('quiz/SubmissionResult/' . $quiz->QuizID . '/' . $CourseID) ?>" method="post" id="quizForm" class="my-4">
                    <label for="file">Pilih file</label>
                    <input type="file" name="tugas_siswa" id="" class="form-control" required>
                    <input type="submit" class="btn btn-primary btn-lg mt-3 text-wrap" value="Kirim Jawaban">
                </form>
            </div>
        </div>


    </div>
</div>
</div>
</div>
</main>