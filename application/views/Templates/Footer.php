<!-- modal logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content justify-content-center">
            <div class="modal-body" style="margin-top: 8px;">
                <div class="float-left">Yakin Arep metu ?</div>
                <div class="float-right">
                    <a class="btn btn-warning text-dark" href="<?= base_url('Auth/logout');?>">Metu</a>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Ra sido</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal rating -->
<?php foreach($kuliner as $k) : ?>
<div class="modal fade" id="rating<?= $k->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content justify-content-center">
            <form action="<?= base_url('Culinary/rating');?>" method="POST">
                <div class="modal-body" style="margin-top: 15px;">
                    <div class="form-group">
                        <div class="text-center text-warning h3"><?= $k->name_place;?></div>
                    </div>
                    <div class="float-left">
                        <div class="form-group">
                            <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                            <input type="hidden" name="id_kuliner" value="<?= $k->id_kuliner;?>">
                            <select class="form-control" name="id_rating" id="id_rating">
                                <option value="">--Pilih Rating--</option>
                                <?php 
                                $rating = $this->db->query('select * from m_rating')->result();
                                foreach($rating as $r) :?>
                                    <option value="<?= $r->id;?>"><?= $r->rating;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-warning text-dark" type="submit">Nilai</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ra sido</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- modal rating1 -->
<?php foreach($rekomen as $k) : ?>
<div class="modal fade" id="rating1<?= $k->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content justify-content-center">
            <form action="<?= base_url('Culinary/rating');?>" method="POST">
                <div class="modal-body" style="margin-top: 15px;">
                    <div class="form-group">
                        <div class="text-center text-warning h3"><?= $k->name_place;?></div>
                    </div>
                    <div class="float-left">
                        <div class="form-group">
                            <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                            <input type="hidden" name="id_kuliner" value="<?= $k->id_kuliner;?>">
                            <select class="form-control" name="id_rating" id="id_rating">
                                <option value="">--Pilih Rating--</option>
                                <?php 
                                $rating = $this->db->query('select * from m_rating')->result();
                                foreach($rating as $r) :?>
                                    <option value="<?= $r->id;?>"><?= $r->rating;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-warning text-dark" type="submit">Nilai</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ra sido</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?= base_url('assets/js/demo/datatables-demo.js');?>"></script>
<!-- <script type="text/javascript" src="<?= base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>
<script>
    var lineChartData = {
        labels : <?php echo json_encode($name_place);?>,
        datasets : [
            {
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(152,235,239,1)",
                data : <?php echo json_encode($rating);?>
            }
        ]
    }
    var myLine = new Chart(document.getElementById("x").getContext("2d")).Line(lineChartData);
</script> -->

<script>
    $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script>
    const scriptURL = "https://script.google.com/macros/s/AKfycbwqplUxSjvwnIsq02vtjCnsuPstgbTT_Xj4HDsNK5RjZhkKppSnC37V6LSbIpS66F0/exec";
    const form = document.forms["my-portfolio-contact"];

    const btnSend = document.querySelector(".btn-send");
    const btnLoading = document.querySelector(".btn-loading");
    const myAlert = document.querySelector(".my-alert");

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol send di klik
        // tampilkan tombol loading, hilangkan tombol send
        btnLoading.classList.toggle("d-none");
        btnSend.classList.toggle("d-none");
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
        .then((response) => {
            // tampilkan tombol Send, hilangkan tombol Loading
            btnLoading.classList.toggle("d-none");
            btnSend.classList.toggle("d-none");
            // tampilkan alert
            myAlert.classList.toggle("d-none");
            // reset form
            form.reset();
            console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
    });
</script>

</body>
</html>
