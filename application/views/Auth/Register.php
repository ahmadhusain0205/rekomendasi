<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
        <?= $this->session->flashdata('message');?>
            <div class="card shadow-lg" style="margin-top:20%">
                <div class="card-body">
                   <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4">Daftar Data Sampean</h1>
                                </div>
                                <hr>
                                <form class="user" method="POST" action="<?= base_url('Auth/register');?>">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Isi jeneng lengkap sampean..." value="<?= set_value('full_name');?>">
                                                <?= form_error('full_name', '<small class="text-danger">', '</small>');?>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Isi email sampean..." value="<?= set_value('email');?>">
                                                    <?= form_error('email', '<small class="text-danger">', '</small>');?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form_group">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Isi sandi sampean...">
                                                    <?= form_error('password', '<small class="text-danger">', '</small>');?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Isi alamat sampean..." value="<?= set_value('address');?>">
                                                    <?= form_error('address', '<small class="text-danger">', '</small>');?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Isi nomor hp sampean..." value="<?= set_value('phone_number');?>">
                                                    <?= form_error('phone_number', '<small class="text-danger">', '</small>');?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <select name="id_gender" id="id_gender" class="form-control">
                                                    <option value="">-- Pilih jenis kelamin --</option>
                                                    <?php foreach($gender as $g) : ?>
                                                    <option value="<?= $g->id;?>"><?= $g->gender;?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                    <?= form_error('id_gender', '<small class="text-danger">', '</small>');?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select name="id_religion" id="id_religion" class="form-control">
                                                    <option value="">-- Pilih agama --</option>
                                                    <?php foreach($religion as $r) : ?>
                                                    <option value="<?= $r->id;?>"><?= $r->religion;?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                    <?= form_error('id_religion', '<small class="text-danger">', '</small>');?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group text-center">
                                            <button class="form-control bg-warning text-dark" type="submit" onclick="add_similarity()">Daftar</button>
                                        </div>
                                </form>
                                <div class="text-center">
                                    <a class="small text-warning" href="<?= base_url('Auth');?>">Uwes nduwe akun!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function backmenu(){
        $(document).on("click", function(){
            window.location = '<?= base_url('Auth/add_similarity');?>';
        });
    }
</script>