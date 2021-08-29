<div class="container" style="margin-top: 5rem;">
    <?= $this->session->flashdata('message');?>
    <div class="row justify-content-center pl-0">
        <?php foreach($kuliner as $k) : ?>
            <div class="col-lg-6">
                <div class="card responsive bg-warning mb-3 shadow" style="max-width: 500px;">
                    <div class="row no-gutters">
                        <div class="col-md-6 responsive">
                            <img src="<?= base_url('assets/img/rm/') .$k->image ;?>" class="img-fluid  responsive" alt="Card img cap" style="width: 18rem; height: 16rem; margin-left: 12px">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-warning text-dark" style="margin-top: 5px; margin-left:-240px;">
                            <i class="fas fa-star"></i> <?php
                                $query = $this->db->query("select sum(id_rating) as sum_rat from similarity where id_kuliner = ". $k->id_kuliner)->result();
                                foreach($query as $q){
                                  $rating = $q->sum_rat;
                                }
                                foreach ($jml_user as $ju){
                                    $user = $ju->count_user;
                                }
                                $avg = number_format($rating/$user, 1);
                                echo $avg;
                            ?>
                            </button>
                            <div class="card-body p-4" style="margin-top: -1.5rem; margin-bottom:-2px">
                                <div class="card-title h5"><?= $k->name_place;?></div>
                                <div class="card-text h6"><?= $k->address;?></div>
                                <div class="row justify-content-center">
                                    <div class="col">
                                            <?php 
                                                $sql = $this->db->query('select * from similarity where id_user = '.$this->session->userdata('id'))->result();
                                                foreach($sql as $s){
                                                    if($s->id_kuliner == $k->id_kuliner ){
                                                        if(isset($k->id_rating)){
                                                        }
                                                        else{?>
                                                            <button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#rating<?= $k->id;?>"><i class="fas fa-star"></i> Nilai</button>
                                                        <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        <!-- <button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#rating<?= $k->id;?>"><i class="fas fa-star"></i> Nilaxi</button> -->
                                        <a href="<?= $k->link_maps;?>" type="button" class="btn btn-secondary text-white float-right"><i class="fas fa-motorcycle"></i> Gaske</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>


<!-- <?= var_dump($kuliner);?> -->