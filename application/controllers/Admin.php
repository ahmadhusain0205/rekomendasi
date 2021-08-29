<?php
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id_role') == 2){
            redirect('Block');
        }else if (!isset($_SESSION['email'])) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Please Login.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('Auth');
        }
        $this->form_validation->set_rules('full_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
    }
    function index(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jml_users'] = $this->Kuliner_m->jml_users();
        $data['jml_kuliner'] = $this->Kuliner_m->jml_kuliner();
        $data['jml_baru'] = $this->Kuliner_m->jml_baru();
        $data['rata_rating'] = $this->Kuliner_m->rata_rating();
        // $data['detail_kuliner'] = $this->Kuliner->get_kuliner_similarity('similarity')->result();
        $data['judul'] = 'Kaca Pertama';
        $data['title'] = 'Dashboard';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['hasil'] = $this->Kuliner_m->hasil();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('Admin/Dashboard', $data);
        $this->load->view('Templates/Endbar', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function Admin(){
        $data['admin'] = $this->Kuliner_m->get_data_admin('user')->result();
        $data['gender'] = $this->Kuliner_m->get('m_gender');
        $data['religion'] = $this->Kuliner_m->get('m_religion');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['judul'] = 'Kaca Admin';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('Admin/Admin', $data);
        $this->load->view('Templates/Endbar', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function add()
    {
        if($this->form_validation->run() == true){
            $data = [
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_created' => time(),
                'id_role' => '1',
                'id_gender' => $this->input->post('id_gender'),
                'id_religion' => $this->input->post('id_religion'),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your data has been save it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/Admin');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> Your data has not add it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/Admin');
        }
    }
    function edit(){
        if($this->form_validation->run() == true){
            $id = $this->input->post('id');
            $data = array(
                'id' => $id,
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_created' => time(),
                'id_role' => '1',
                'id_gender' => $this->input->post('id_gender'),
                'id_religion' => $this->input->post('id_religion'),
            );
            $this->db->where('id', $id);
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your data has been edit it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/Admin');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> Your data has not edit it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/Admin');
        }
    }
    function delete($id)
    {
        $data['user'] = $this->Kuliner_m->get('user');
        $where = array('id' => $id);
        $this->Kuliner_m->delete($where, 'user');
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been deleted!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
         redirect('Admin/Admin');
    }
    function User(){
        $data['member'] = $this->Kuliner_m->get_data_user('user')->result();
        $data['gender'] = $this->Kuliner_m->get('m_gender');
        $data['religion'] = $this->Kuliner_m->get('m_religion');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['judul'] = 'Kaca User';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('Admin/User', $data);
        $this->load->view('Templates/Endbar', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function add_member()
    {
        if($this->form_validation->run() == true){
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
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your data has been save it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/User');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> Your data has not add it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/User');
        }
    }
    function edit_member(){
        if($this->form_validation->run() == true){
            $id = $this->input->post('id');
            $data = array(
                'id' => $id,
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
            );
            $this->db->where('id', $id);
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your data has been edit it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/User');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> Your data has not edit it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/User');
        }
    }
    function delete_member($id)
    {
        $data['user'] = $this->Kuliner_m->get('user');
        $where = array('id' => $id);
        $this->Kuliner_m->delete($where, 'user');
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been deleted!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
         redirect('Admin/User');
    }
    function Culinary(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kuliner1'] = $this->Kuliner_m->get_join_kuliner('kuliner');
        $data['jml_user'] = $this->Kuliner_m->jml_user();   
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['wifi'] = $this->Kuliner_m->get('m_wifi');
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['judul'] = 'Kaca Kuliner';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('Admin/Kuliner', $data);
        $this->load->view('Templates/Endbar', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function add_culinary()
    {
            $data = [
                'name_place' => $this->input->post('name_place'),
                'image' => 'rm.png',
                'address' => $this->input->post('address'),
                'link_maps' => $this->input->post('link_maps'),
                'id_wifi' => $this->input->post('id_wifi')
            ];
            $this->db->insert('kuliner', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your data has been save it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/Culinary');
    }
    function edit_culinary(){
            $id = $this->input->post('id');
            $data = array(
                'id' => $id,
                'name_place' => $this->input->post('name_place'),
                'image' => 'rm.png',
                'address' => $this->input->post('address'),
                'link_maps' => $this->input->post('link_maps'),
                'id_wifi' => $this->input->post('id_wifi')
            );
            $this->db->where('id', $id);
            $this->db->update('kuliner', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your data has been edit it!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Admin/Culinary');
    }
    function delete_culinary($id)
    {
        $data['kuliner'] = $this->Kuliner_m->get('kuliner');
        $where = array('id' => $id);
        $this->Kuliner_m->delete($where, 'kuliner');
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been deleted!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
         redirect('Admin/Culinary');
    }
    function profile(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kaca Profil';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['all'] = $this->Kuliner_m->get_all('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('Admin/Profile', $data);
        $this->load->view('Templates/Endbar', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function edit_profile(){
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kaca Edit';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['all'] = $this->Kuliner_m->get_all('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('Admin/Edit', $data);
        $this->load->view('Templates/Endbar', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function Edit_data()
    {
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['jml_user'] = $this->Kuliner_m->jml_user();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
            redirect('Admin/profile');
        }
}