<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card bg-darkblue">
                <div class="card-body p-3">
                    <div class="text-center">
                        <img src="<?=base_url()?>media/avatar/<?=$profil->UserAvatar?>" class="profil-ava" alt="">
                        <div>
                            <a href="<?=base_url()?>profil/avatar" class="text-warning small fw-bold">Ubah Avatar</a>
                        </div>
                        <div class="mt-2 text-white fw-bold fs-4">
                            <?=$this->session->userdata('nama'); ?>
                        </div>
                    </div>
                    <div class="fw-bold bg-danger text-white small px-1"><?php echo validation_errors(); ?></div>
                    <form role="form" method="POST" action="<?= base_url('profil/') ?>" class="mt-5">
                        <label>Nama Lengkap</label>
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                                aria-describedby="username-addon" required value="<?=$profil->UserName?>">
                        </div>
                        <label>Alamat Email</label>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" aria-label="username"
                                aria-describedby="username-addon" required value="<?=$profil->UserEmail?>">
                        </div>
                        <label>Nomor Telepon</label>
                        <div class="mb-3">
                            <input type="tel" name="telp" class="form-control" placeholder="Masukkan Nomor Telp"
                                aria-label="username" aria-describedby="username-addon" required
                                value="<?=$profil->UserContactNo?>">
                        </div>
                        <label>Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" required value="**********" disabled>
                            <a href="<?=base_url()?>profil/password" class="text-warning small fw-bold">Ubah Password</a>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning w-100 mt-4 mb-0" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</main>