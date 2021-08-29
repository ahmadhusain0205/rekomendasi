<div class="container">
    <div class="text-center text-dark mt-4">
        <h3><u>Owah Profil</u></h3>
    </div>
    <?= form_open_multipart('Admin/Edit_data'); ?>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="full_name" class="col-sm-2 col-form-label">Jeneng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="full_name" name="full_name" value="<?= $user['full_name'];?>">
                        <?= form_error('full_name', '<small class="text-danger">', '</small>');?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="<?= $user['address'];?>">
                        <?= form_error('address', '<small class="text-danger">', '</small>');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">    
                <div class="form-group row">
                    <label for="phone_number" class="col-sm-2 col-form-label">Hp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= $user['phone_number'];?>">
                        <?= form_error('phone_number', '<small class="text-danger">', '</small>');?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_gender" class="col-sm-2 col-form-label">Jk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_gender" name="id_gender" value="<?php if($user['id_gender'] = 1){ echo "Laki-laki";}else{echo "Perempuan";}?>" readonly>
                        <?= form_error('id_gender', '<small class="text-danger">', '</small>');?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_religion" class="col-sm-2 col-form-label">Agomo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_religion" name="id_religion" value="<?php if($user['id_religion'] = 1){ echo "Islam";} else if($user['id_religion'] = 2){echo "Kristen";} else if($user['id_religion'] = 3){echo "Protestan";} else if($user['id_religion'] = 4){echo "Konghuchu";} else if($user['id_religion'] = 5){echo "Hindu";} else {echo"Budha";}?>" readonly>
                        <?= form_error('id_religion', '<small class="text-danger">', '</small>');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-group row">
                    <div class="col-sm-2">Rupamu</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image'];?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Golek sek...</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-warning text-dark float-right"><i class="far fa-save"></i> Simpen</button>
                    </div>
                </div>
            </div>
        </div>
    <?= form_close();?>
</div>