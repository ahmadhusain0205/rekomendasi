<div class="container-fluid">
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title;?></h1>
    </div> -->
    <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center pl-3 pr-3">
                            <div class="col mr-4">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Rating Kuliner sing paling duwur</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php foreach($rata_rating as $r) { echo round($r->rating,1); } ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-star fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center pl-3 pr-3">
                            <div class="col mr-4">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Kuliner sing wes daftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_kuliner;?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center pl-3 pr-3">
                            <div class="col mr-4">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah pengguna sing wes daftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_users;?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center pl-3 pr-3">
                            <div class="col mr-4">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah pengguna sing anyar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_baru;?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row-lg-auto shadow mb-4">
        <div class="card text-center">
            <div class="card-body">
                <h4 class="text-warning">Selamat Datang di Sistem Rekomendasi Kuliner</h4>
                <hr class="bg-primary">
                <p><img src="<?= base_url('assets/img/bismillah.jpg');?>" width="100"></p>
                <p style="padding: 2rem;">
                    Atas Berkat Rahmat <b class="text-dark">الله</b> yang Maha Pengasih lagi Maha Penyayang. Developer telah menyelesaikan Sistem Rekomendasi Kuliner yang berada di Kota Magelang. Sistem ini menawarkan rekomendasi tempat kuliner kepada para penggunanya, untuk memberikan masukan jika mana kostumer bingung memilih tempat untuk makan.
                </p>
            </div>
        </div>
    </div>
</div>