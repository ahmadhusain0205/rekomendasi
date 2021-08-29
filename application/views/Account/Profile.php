<div class="container" style="padding-top: 5rem;">
    <div class="text-center text-dark">
        <h3><u>Profil ku</u></h3>
    </div>
    <?= $this->session->flashdata('message');?>
    <div class="row">
        <div class="col">
            <div class="mb-4">
                <a type="button" class="btn btn-warning text-dark float-right" href="<?= base_url('Account/edit');?>"><i class="fas fa-edit"></i>  Ubah profil</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col text-center">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="200" style="border-radius: 200px;">
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="full_name" class="col-sm-4 col-form-label">Jeneng lengkap</label>
                <div class="col-sm">
                    <input type="text" readonly class="form-control" id="name" value="<?= $user['full_name']; ?>">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm">
                    <input type="text" readonly class="form-control" id="email" value="<?= $user['email']; ?>">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="address" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm">
                    <input type="text" readonly class="form-control" id="email" value="<?= $user['address']; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="phone_number" class="col-sm-4 col-form-label">Nomor hp</label>
                <div class="col-sm">
                    <input type="text" readonly class="form-control" id="email" value="<?= $user['phone_number']; ?>">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm">
                    <input type="text" readonly class="form-control" id="email" value="<?= $all['gender']; ?>">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="religion" class="col-sm-4 col-form-label">Agomo</label>
                <div class="col-sm">
                    <input type="text" readonly class="form-control" id="email" value="<?= $all['religion']; ?>">
                </div>
            </div>
        </div>
    </div>
    <p class="card-text"><small class="text-muted float-right mt-5">Wes daftar ket tanggal : <?= date('d M Y', $this->session->userdata('date_created')); ?></small></p>
</div>