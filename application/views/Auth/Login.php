<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg" style="margin-top:25%">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4">Sugeng rawuh</h1>
                                </div>
                                <?= $this->session->flashdata('message');?>
                                <hr>
                                <form method="POST" action="<?= base_url('Auth/login')?>">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Isi email sampean...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Isi sandi sampean...">
                                    </div>
                                    <hr>
                                    <div class="form-group text-center">
                                        <button class="form-control bg-warning text-dark" type="submit">Mlebu</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <a class="small text-warning" href="<?= base_url('Auth/');?>register">Gawe akun anyar!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>