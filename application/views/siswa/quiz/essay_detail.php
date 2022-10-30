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
                <div class="col-md-6 mb-3">
                    <img src="<?= base_url() ?>assets/img/vector/Online test-pana.svg" alt="" class="w-100" srcset="">
                </div>
                <div class="col-md-6 my-auto">
                    <p class="h3 text-white text-uppercase"><?= $quiz->QuizTitle ?></p>
                    <p class="text-white h6">Jumlah Soal <?= $jmlsoal ?></p>
                    <a href="#" class="btn btn-primary btn-lg mt-3" onclick="hideshow('start','end')">Mulai mengerjakan</a>
                </div>
            </div>
            <form action="<?= base_url('quiz/EssayResult/' . $quiz->QuizID . '/' . $CourseID) ?>" method="post" id="quizForm">
                <div class="row" id="end" style="display:none">
                    <?php $x = 1;
                    foreach ($question as $row) : ?>
                        <div class="row mb-5">
                            <hr>
                            <div class="col-md-12 text-white my-auto h5">
                                <p class="fw-bold"><?= $x ?>. <?= $row->Question ?></p>
                                <?php if ($row->question_img != null) : ?>
                                    <a href="<?= base_url() ?>media/essay/<?= $row->question_img ?>" target="_blank">
                                        <img src="<?= base_url() ?>media/essay/<?= $row->question_img ?>" class="rounded ms-3 w-80 mt-2" alt="">
                                        <p class="ps-3 small mb-3">Klik gambar untuk memperbesar</p>
                                    </a>
                                <?php endif; ?>
                                <textarea name="essay<?= $row->EssayID ?>" id="" rows="10" class="form-control bg-dark" placeholder="Tuliskan jawaban nomor <?= $x ?>" required></textarea>
                            </div>

                        </div>
                    <?php $x++;
                    endforeach; ?>
                    <input type="submit" class="btn btn-primary btn-lg mt-3 text-wrap" value="Kumpulkan Jawaban">
                </div>

            </form>

        </div>
    </div>
</div>
</div>
</main>
<script>
    function hideshow(hid, sho) {
        var myEle = document.getElementById(sho);
        if (myEle) {
            document.getElementById(hid).style.display = "none";
            myEle.style.display = "flex"
        } else {
            document.getElementById(hid).style.display = "none";
            document.getElementById("end").style.display = "flex";
        }
    }
</script>