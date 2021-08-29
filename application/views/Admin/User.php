<div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-body shadow">
                <h4 class="font-weight-bold text-warning">USER
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </h4>
            </div>
        </div>
        <div class="card shadow mb-4 mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                        <thead align="center">
                            <tr>
                                <th width="1%">No</th>
                                <th width="20%">Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th width="25%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = "1";
                            foreach ($member as $a) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->full_name; ?></td>
                                    <td><?= $a->email; ?></td>
                                    <td><?= $a->address; ?></td>
                                    <td align="center">
                                        <?php
                                        if ($user['full_name'] == $a->full_name) {
                                            echo "
                                            <button type='button' class='btn btn-sm btn-dark shadow mb-4'>
                                                <i class='fa fa-wrench'></i> Edit
                                            </button>
                                            <button type='button' class='btn btn-sm btn-dark shadow mb-4'>
                                                <i class='fa fa-trash'></i> Hapus
                                            </button>";
                                        } else {
                                            echo "<button type='button' class='btn btn-sm btn-warning shadow mb-4' data-toggle='modal' data-target='#edit";
                                            echo $a->id;
                                            echo "'>
                                                <i class='fa fa-wrench'></i> Edit
                                            </button>
                                            <button type='button' class='btn btn-sm btn-danger shadow mb-4' data-toggle='modal' data-target='#delete";
                                            echo $a->id;
                                            echo "'>
                                                <i class='fa fa-trash'></i> Delete
                                            </button>";
                                        }
                                        ?>
                                        <button type='button' class='btn btn-sm btn-success shadow mb-4' data-toggle="modal" data-target="#detail<?= $a->id;?>">
                                            <i class='fa fa-info'></i> Detail
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>


<!-- Modal detail -->
<?php
    foreach ($member as $a) :
    ?>
        <div class="modal fade" id="detail<?php echo $a->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h5 class="modal-title text-primary" id="exampleModalLabel"><b><?= $a->full_name;?></b></h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="POST" class="user" action="<?= base_url('Admin/edit'); ?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mt-5 text-center">
                                        <img src="<?= base_url('assets/img/profile/').$a->image;?>" width="100">
                                    </div>
                                    <div><?= $a->email;?></div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="hidden" name="id" value="<?= $a->id; ?>">
                                        <input type="text" class="form-control form-control" name="password" id="password" required value="<?= $a->password; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control form-control" name="address" id="address" required value="<?= $a->address; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control form-control" name="phone_number" id="phone_number" required value="<?= $a->phone_number; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control form-control" name="gender" id="gender" required value="<?= $a->gender; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <input type="text" class="form-control form-control" name="religion" id="religion" required value="<?= $a->religion; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="date_created">Date Created</label>
                                        <input type="text" class="form-control form-control" name="date_created" id="date_created" required value="<?= date('d - M - Y', strtotime($a->date_created)); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<!-- akhir modal -->

<!-- Modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-primary font-weight-bold">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="<?= base_url('Admin/add_member'); ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                                        </div>
                                        <input type="text" class="form-control form-control" id="full_name" name="full_name" placeholder="Enter Full Name..." value="<?= set_value('full_name');?>">
                                    </div>
                                    <?= form_error('full_name', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                                    </div>
                                    <input type="email" class="form-control form-control" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email');?>">
                                </div>
                                <?= form_error('email', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="password" class="form-control form-control" id="password" name="password" placeholder="Enter Password...">
                                </div>
                                <?= form_error('password', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-map-marked-alt"></i></i></div>
                                    </div>
                                    <input type="text" class="form-control form-control" id="address" name="address" placeholder="Enter Address..." value="<?= set_value('address');?>">
                                </div>
                                <?= form_error('address', '<small class="text-danger">', '</small>');?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                    </div>
                                    <input type="number" class="form-control form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number..." value="<?= set_value('phone_number');?>">
                                </div>
                                <?= form_error('phone_number', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-venus-mars"></i></div>
                                    </div>
                                    <select name="id_gender" id="id_gender" class="form-control form-control">
                                        <option value="">-- Choose Gender --</option>
                                        <?php foreach($gender as $g) : ?>
                                        <option value="<?= $g->id;?>"><?= $g->gender;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <?= form_error('id_gender', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-praying-hands"></i></div>
                                    </div>
                                    <select name="id_religion" id="id_religion" class="form-control form-control">
                                        <option value="">-- Choose Religion --</option>
                                        <?php foreach($religion as $r) : ?>
                                        <option value="<?= $r->id;?>"><?= $r->religion;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <?= form_error('id_religion', '<small class="text-danger">', '</small>');?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal -->

<!-- Modal edit -->
<?php
foreach ($member as $a) :
?>
    <div class="modal fade" id="edit<?php echo $a->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-white bg-warning font-weight-bold">
                    <h5 class="modal-title" id="exampleModalLabel">Edit <?= $a->full_name;?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" class="user" action="<?= base_url('Admin/edit_member'); ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                            </div>
                                            <input type="hidden" id="id" name="id" value="<?= $a->id;?>">
                                            <input type="text" class="form-control form-control" id="full_name" name="full_name" value="<?= $a->full_name;?>">
                                        </div>
                                        <?= form_error('full_name', '<small class="text-danger">', '</small>');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-at"></i></div>
                                        </div>
                                        <input type="email" class="form-control form-control" id="email" name="email" value="<?= $a->email;?>">
                                    </div>
                                    <?= form_error('email', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                                        </div>
                                        <input type="password" class="form-control form-control" id="password" name="password" value="<?= $a->password;?>">
                                    </div>
                                    <?= form_error('password', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-map-marked-alt"></i></i></div>
                                        </div>
                                        <input type="text" class="form-control form-control" id="address" name="address" value="<?= $a->address;?>">
                                    </div>
                                    <?= form_error('address', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                        </div>
                                        <input type="number" class="form-control form-control" id="phone_number" name="phone_number" value="<?= $a->phone_number;?>">
                                    </div>
                                    <?= form_error('phone_number', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-venus-mars"></i></div>
                                        </div>
                                        <select name="id_gender" id="id_gender" class="form-control form-control">
                                            <option value="">-- Choose Gender --</option>
                                            <?php foreach($gender as $g) : ?>
                                            <option value="<?= $g->id;?>"><?= $g->gender;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('id_gender', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-praying-hands"></i></div>
                                        </div>
                                        <select name="id_religion" id="id_religion" class="form-control form-control">
                                            <option value="">-- Choose Religion --</option>
                                            <?php foreach($religion as $r) : ?>
                                            <option value="<?= $r->id;?>"><?= $r->religion;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('id_religion', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- akhir modal -->

<!-- Modal Hapus -->
<?php
    foreach ($member as $a) :
    ?>
        <div class="modal fade" id="delete<?php echo $a->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">Delete data?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Yes" for <b>confirm</b>, or "No" for <b>cancel</b></div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                        <a class="btn btn-danger" href="<?= base_url('Admin/delete_member/') . $a->id; ?>">Yes</a>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach; ?>
<!-- akhir modal -->