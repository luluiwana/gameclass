<div class="row mt-4 mx-0">
    <p class="text-white fw-bold">Informasi Kelas</p>
    <div class="card bg-darkblue">
        <div class="card-body row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <img src="<?=base_url()?>media/logo/<?=$course->CourseLogo?>" alt="" width="100px">
                    </div>
                    <div class="col-md-8 mt-3">
                        <table class="table">
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td> <?=$course->CourseName?></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td> <?=$course->ClassName?></td>
                            </tr>
                            <tr>
                                <td>Sekolah</td>
                                <td><?=$course->SchoolName?></td>
                            </tr>
                            <tr>
                                <td>Guru</td>
                                <td class="text-wrap"><?=$course->UserName?></td>
                            </tr>
                        </table>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#quit">Keluar dari kelas</a>
                        <!-- Modal Keluar-->
                        <div class="modal fade" id="quit" tabindex="-1" aria-labelledby="quitLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content modal-danger">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-2 my-auto text-right">
                                                <i class="fas fa-exclamation-triangle fs-1 text-danger"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <p class="text-danger fw-bold mb-4">Kamu yakin ingin keluar dari kelas?</p>
                                               

                                                <a href="<?=base_url()?>siswa/quit/<?=$course->CourseID?>"
                                                    type="button" class="btn btn-danger btn-sm">Keluar dari Kelas</a>
                                                <button type="button"
                                                    class="btn btn-dark btn-sm position-absolute end-3"
                                                    data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  d-none d-sm-block">
                <img src="<?=base_url()?>assets/img/vector/Learning-bro (1).svg" class="vector" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
</div>
</main>