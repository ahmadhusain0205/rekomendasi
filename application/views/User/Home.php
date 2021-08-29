<?php
    $month= date ("m");
    $year=date("Y");
    $day=date("d");
    $endDate=date("t",mktime(0,0,0,$month,$day,$year));
?>
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col"><?= $judul;?></div>
    </div>
    <div class="row justify-content-center pl-0 mt-5">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center pl-3 pr-3">
                            <div class="col mr-4">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Rating Kuliner sing paling duwur</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php foreach($rata_rating as $r) { echo $r->rating; } ?></div>
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
    <div class="row">
        <div class="col-xl-9 col-md-6 mb-4">
            <div class="row justify-content-center">
                <div class="col float-left">
                    <div class="card">
                        <div class="card-body shadow">
                            <div class="h3 text-dark pt-1 text-center">
                            <?php 
                                echo "Dino iki : <font class='text-warning'>".date("F, d - Y ",mktime(0,0,0,$month,$day,$year))."</font>";
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col pt-3 float-left">
                        <?php
                            echo '
                            <table class="float-left text-center shadow" border="0" cellpadding=10 cellspacing=7 style="border:1px; border-radius:1rem; width: 100%;">
                                <tr class="bg-warning">
                                    <td align=center><font color=red>Monday</font></td>
                                    <td align=center>Sunday</td>
                                    <td align=center>Tuesday</td>
                                    <td align=center>Wednesday</td>
                                    <td align=center>Thursday</td>
                                    <td align=center>Friday</td>
                                    <td align=center>Saturday</td>
                                </tr>';
                            $s=date ("w", mktime (0,0,0,$month,1,$year));
                            for ($ds=1;$ds<=$s;$ds++) {
                            echo "
                                    <td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\">
                                    </td>";}
                            for ($d=1;$d<=$endDate;$d++) {
                            if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
                            $fontColor="#000000";
                            if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
                            echo "
                                    <td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
                            if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
                            echo '
                            </table>';
                        ?>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning shadow" style="height: 100%;">
                <div class="card-body">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col mt-5">
                                <img src="<?= base_url('assets/img/developer.png')?>" alt="Ahmad Husain" class="rounded-circle img-thumbnail shadow" width="70%"/>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col mt-5">
                                <h5 style="color: white">Ahmad Husain</h5>
                                <p class="lead" style="color: white">Student | Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>