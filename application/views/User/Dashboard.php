<div class="container" style="margin-top: 5rem;">
    <div class="row justify-content-center pl-0">
        <div class="col">
            <h2 class="text-dark text-center">Kuliner sing direkomendasike sistem</h2>
    </div>
    <div class="row justify-content-center pl-0 mt-5">
        <?php
            $y = $this->db->query('SELECT id_user FROM similarity WHERE id_user not in (SELECT id_user FROM similarity WHERE id_rating is not null) GROUP BY id_user')->result();
            foreach($y as $b) :
                $user_null = $this->session->userdata('id') == $b->id_user;
                if($this->session->userdata('id') == $b->id_user){ 
                    echo '<div class="col"><h1 class="text-center text-warning" style="margin-top: 10%;">Sampean rung tau ngerating blas!</h1></div>';
                }
            endforeach;
            $z = $this->db->query('SELECT id_user FROM v_data_objek GROUP BY id_user')->result();
            foreach($z as $p):
                $user_objek = $this->session->userdata('id') == $p->id_user;
                if($this->session->userdata('id') == $p->id_user){
                    echo '<div class="col"><h1 class="text-center text-warning" style="margin-top: 10%;">Ra ono rekomendasi</h1></div>';
                }
            endforeach;
            $x = $this->db->query('SELECT id_user FROM v_data_target GROUP BY id_user')->result();
            foreach($x as $a):
                $user_target = $this->session->userdata('id') == $a->id_user;
                if($this->session->userdata('id') == $a->id_user) {
                    foreach($rekomen as $k) :
                        ?>
            <div class="col-lg-6">
                <div class="card responsive bg-warning mb-3 shadow" style="max-width: 500px;">
                    <div class="row no-gutters">
                        <div class="col-md-6 responsive">
                            <img src="<?= base_url('assets/img/rm/') .$k->image ;?>" class="img-fluid  responsive" alt="Card img cap" style="width: 18rem; height: 16rem; margin-left: 12px">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-warning text-dark" style="margin-top: 5px; margin-left:-240px;">
                                <i class="fas fa-star"></i> 
                                <?php 
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
                                        <button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#rating1<?= $k->id;?>"><i class="fas fa-star"></i> Nilai</button>
                                        <a href="<?= $k->link_maps;?>" type="button" class="btn btn-secondary text-white float-right"><i class="fas fa-motorcycle"></i> Gaske</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php  endforeach;} endforeach; ?>
        </div>
    </div>

    <hr class="bg-warning bold mt-5">

    <div class="row justify-content-center pl-0">
        <div class="col">
            <h2 class="text-dark text-center">Kuliner sing hurung tau di jelajahi</h2>
        </div>
    </div>
    <div class="row justify-content-center pl-0 mt-5">
        <?php 
        foreach($x as $a):
        if($this->session->userdata('id') == $a->id_user) {
        foreach($hasil as $k) : ?>
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
                                            <button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#rating<?= $k->id;?>"><i class="fas fa-star"></i> Nilai</button>
                                            <a href="<?= $k->link_maps;?>" type="button" class="btn btn-secondary text-white float-right"><i class="fas fa-motorcycle"></i> Gaske</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; } endforeach;
            foreach($z as $p):
            if ($this->session->userdata('id') == $p->id_user) {
            echo '<div class="col"><h1 class="text-center text-warning" style="margin-top: 10%;">Kabeh wes sampean jelajahi</h1></div>';
            } endforeach;
            foreach($y as $b) :
            if($this->session->userdata('id') == $b->id_user) { echo '<div class="col"><h1 class="text-center text-warning" style="margin-top: 10%;">Rating beberapa kuliner sek</h1></div><br>'; } endforeach; ?>

    </div>
</div>

<!-- <?= json_encode($c);?> -->
<?= $this->session->userdata('id');?>