<?php
class Account extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kaca Profil';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['all'] = $this->Kuliner_m->get_all('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Navbar', $data);
        $this->load->view('Account/Profile', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function edit(){
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kaca Edit';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['all'] = $this->Kuliner_m->get_all('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Navbar', $data);
        $this->load->view('Account/Edit', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function Edit_data()
    {
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['jml_user'] = $this->Kuliner_m->jml_user();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('full_name', 'Name', 'required|trim');
        if($this->form_validation->run() == false){
            redirect('User/Edit');
        } else {
            $full_name = $this->input->post('full_name');
            $address = $this->input->post('address');
            $phone_number = $this->input->post('phone_number');
            $email = $this->input->post('email');
            // cek jika ada gambar baru
            $upload_image =$_FILES['image']['name'];
            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png|jfif';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);
                if($this->upload->do_upload('image')){
                    $old_image = $data['user']['image'];
                    if($old_image != 'default.png'){
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('full_name', $full_name);
            $this->db->set('address', $address);
            $this->db->set('phone_number', $phone_number);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Mantap!</strong> Profil e wes ke ubah!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('Account');
        }
    }

    function tes(){
        $a = $this->session->userdata('id');
        $x = $this->db->query('SELECT id_user FROM similarity WHERE id_kuliner in (SELECT id_kuliner FROM v_x) AND id_rating is null group by id_user')->result();
        foreach($x as $a){
            $b[] = $a->id_user;
        }
        $c = $b;
        $null = $this->db->query('SELECT id_user FROM similarity WHERE id_user not in (SELECT id_user FROM similarity WHERE id_rating is not null) GROUP BY id_user')->result();
        foreach($null as $a){
            $n[] = $a->id_user;
        }
        $z = $n;
        echo json_encode($a);
        echo '<br>';
        echo '<br>';
        echo json_encode($c);
        echo '<br>';
        echo '<br>';
        echo json_encode($z);
    }
}