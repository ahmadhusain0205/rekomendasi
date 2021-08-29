<?php
class Auth extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m');
    }
    function index(){
        $data['judul'] = 'Kaca Mlebu';
        $this->load->view('Templates/Header_login', $data);
        $this->load->view('Auth/Login', $data);
        $this->load->view('Templates/Footer_login');
    }
    function register(){
        $data['gender'] = $this->Auth_m->get_data('m_gender')->result();
        $data['religion'] = $this->Auth_m->get_data('m_religion')->result();
        // mengatur validasi data
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|max_length[15]',[
            'max_lengt' => 'Maksimal nomor hp ki 15 digit!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email iki uwes kedaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Sandine kependeken!'
        ]);
        // jika validasi gagal
        if($this->form_validation->run() == false){
            $data['judul'] = 'Kaca Daftar';
            $this->load->view('Templates/Header_login', $data);
            $this->load->view('Auth/Register', $data);
            $this->load->view('Templates/Footer_login');
        } else {
            // jika validasi berhasil
            $data = [
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_created' => time(),
                'id_role' => '2',
                'id_gender' => $this->input->post('id_gender'),
                'id_religion' => $this->input->post('id_religion'),
            ];
            $this->db->insert('user', $data);
            if($this->db->affected_rows() > 0){
                $cek = $this->db->query('select id from user order by id desc limit 1')->result();
                foreach($cek as $c){
                    $b = $c->id;
                }
                $a = $b;
                $kuliner = $this->db->query('select id from kuliner')->result();
                foreach($kuliner as $k){
                    $x = $k->id;
                    $data1 = [
                        'id_user' => $a,
                        'id_kuliner' => $x,
                    ];
                    $this->db->insert('similarity', $data1);
                }
            }
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Mantap!</strong> daftar e uwes. Saiki isoh mlebu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('Auth');
        }
    }
    function get_new_user(){
        $y = $this->db->query('select count(id) from kuliner')->result();
        echo var_dump($y);
    }
    function Login()
    {
        // membuat validasi data
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        // jika validasi gagal
        if($this->form_validation->run() == false){
            redirect('Auth');
        } else {
            // jika validasi berhasil
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();
            // jika user ada
            if($user){
                    // cek password
                    if(password_verify($password, $user['password'])){
                        // jika sukses
                        $data = [
                            'id' => $user['id'],
                            'full_name' => $user['full_name'],
                            'email' => $user['email'],
                            'address' => $user['address'],
                            'phone_number' => $user['phone_number'],
                            'image' => $user['image'],
                            'date_created' => $user['date_created'],
                            'id_role' => $user['id_role'],
                            'id_gender' => $user['id_gender'],
                            'id_religion' => $user['id_religion'],
                        ];
                        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                        $this->session->set_userdata($user);
                        if($user['id_role'] == 2){
                            redirect('Home');
                        } else {
                            redirect('Admin');
                        }
                    } else {
                        // jika gagal
                        $this->session->set_flashdata('message', '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Salah sandine!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                        redirect('Auth');
                    }
            } else {
                // jika user tidak ada
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Kayak e email iki hurung di daftarke!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('Auth');
            }
        }
    }
    function logout()
    {
        // menghapus user data
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_role');
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Halah ko malah metu!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('Auth');
    }
    function add_similarity(){
        $y = $this->db->query('select id from user order by id desc limit 1')->result();
        $this->db->query('insert into similarity value("", "NULL", "'.$y.'", (SELECT k.id from kuliner k WHERE k.id=s.id_kuliner))')->result();
        // $x = $this->db->query('select (select u.id from user u where u.id=s.id_user) as id_user, (SELECT k.id from kuliner k WHERE k.id=s.id_kuliner) as id_kuliner from similarity s GROUP BY s.id_kuliner ORDER BY id_kuliner asc;')->result();
    }
}