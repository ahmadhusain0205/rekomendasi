<nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand text-dark" href="<?= base_url('Home');?>"><img src="<?= base_url('assets/');?>img/brand.png" width="30"> Kuliner Magelang
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <?php
                if ($this->uri->segment(1) == 'User') 
                {
                    echo '<a class="nav-link active text-dark" href="';
                    echo base_url('User');
                    echo '">Rekomendasi</a>';
                } else {
                    echo '<a class="nav-link text-white" href="';
                    echo base_url('User');
                    echo '">Rekomendasi</a>';
                }
                if ($this->uri->segment(1) == 'Culinary') 
                {
                    echo '<a class="nav-link active text-dark" href="';
                    echo base_url('Culinary');
                    echo '">Kuliner</a>';
                } else {
                    echo '<a class="nav-link text-white" href="';
                    echo base_url('Culinary');
                    echo '">Kuliner</a>';
                }
                if ($this->uri->segment(1) == 'Contact') 
                {
                    echo '<a class="nav-link active text-dark" href="';
                    echo base_url('Contact');
                    echo '">Kontak</a>';
                } else {
                    echo '<a class="nav-link text-white" href="';
                    echo base_url('Contact');
                    echo '">Kontak</a>';
                }
                if ((($this->uri->segment(1) == 'Account') && ($this->uri->segment(2) == '')) or (($this->uri->segment(1) == 'Account') && ($this->uri->segment(2) == 'edit'))) 
                {
                    echo '
                    <div class="btn-group">
                        <a class="dropdown-toggle nav-link active text-dark" data-toggle="dropdown">';
                        echo $user['full_name'];
                        echo '</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"  href="';
                            echo base_url('Account');
                            echo '">Profil</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                Metu
                            </a>
                        </div>
                    </div>
                    ';
                } else {
                    echo '
                    <div class="btn-group">
                        <a class="dropdown-toggle nav-link text-white" data-toggle="dropdown">';
                        echo $user['full_name'];
                        echo '</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"  href="';
                            echo base_url('Account');
                            echo '">Profil</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                Metu
                            </a>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</nav>
