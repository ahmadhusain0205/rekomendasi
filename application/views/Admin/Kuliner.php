<div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-body shadow">
                <h4 class="font-weight-bold text-warning">Culinary's
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </h4>
            </div>
        </div>
        <div class="card shadow mb-4 mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead align="center">
                            <tr>
                                <th width="1%">No</th>
                                <th width="25%">Nama Tempat</th>
                                <th width="20%">Fasilitas Wifi</th>
                                <th width="30%">Alamat</th>
                                <th>Rating</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = "1";
                            foreach ($kuliner1 as $k) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $k->name_place; ?></td>
                                    <td><?= $k->status; ?></td>
                                    <td><?= $k->address; ?></td>
                                    <td class="text-center">
                                    <?php
                                        $query = $this->db->query("select sum(id_rating) as sum_rat from similarity where id_kuliner = ". $k->id)->result();
                                        foreach($query as $q){
                                        $rating = $q->sum_rat;
                                        }
                                        foreach ($jml_user as $ju){
                                            $user = $ju->count_user;
                                        }
                                        $avg = number_format($rating/$user, 1);
                                        echo $avg;
                                    ?>
                                    </td>
                                    <td class="text-center">
                                        <button type='button' class='btn btn-sm btn-warning shadow mb-4' data-toggle="modal" data-target="#edit<?= $k->id;?>">
                                            <i class='fa fa-edit'></i> Edit
                                        </button>
                                        <button type='button' class='btn btn-sm btn-danger shadow mb-4' data-toggle="modal" data-target="#delete<?= $k->id;?>">
                                            <i class='fa fa-trash'></i> Delete
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

<!-- Modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-primary font-weight-bold">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kuliner</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="<?= base_url('Admin/add_culinary'); ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="name_place" class="form-control" placeholder="Enter name kuliner" value="<?= set_value('name_place');?>">
                                <?= form_error('name_place', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="Enter address" value="<?= set_value('address');?>">
                                <?= form_error('address', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="link_maps" class="form-control" placeholder="Enter link maps" value="<?= set_value('link_maps');?>">
                                <?= form_error('link_maps', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <select name="id_wifi" class="form-control">
                                    <option value="">-- Pilih Status Wifi --</option>
                                    <?php foreach($wifi as $w) : ?>
                                        <option value="<?= $w->id;?>"><?= $w->status;?></option>
                                    <?php endforeach; ?>
                                </select>
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

<!-- modal edit -->
<?php foreach($kuliner1 as $k) :?>
    <div class="modal fade" id="edit<?= $k->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-white bg-primary font-weight-bold">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kuliner</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" class="user" action="<?= base_url('Admin/edit_culinary'); ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="hidden" id="id" name="id" value="<?= $k->id;?>">
                                    <input type="text" name="name_place" class="form-control" value="<?= $k->name_place;?>">
                                    <?= form_error('name_place', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" value="<?= $k->address;?>">
                                    <?= form_error('address', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="link_maps" class="form-control" value="<?= $k->link_maps;?>">
                                    <?= form_error('link_maps', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <select name="id_wifi" class="form-control">
                                        <option value="">-- Pilih Status Wifi --</option>
                                        <?php foreach($wifi as $w) : ?>
                                            <option value="<?= $w->id;?>"><?= $w->status;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;?>
<!-- akhir modal -->

<!-- modal hapus -->
<?php foreach($kuliner1 as $k) :?>
    <div class="modal fade" id="delete<?php echo $k->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <a class="btn btn-danger" href="<?= base_url('Admin/delete_culinary/') . $k->id; ?>">Yes</a>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach;?>
<!-- akhir modal -->