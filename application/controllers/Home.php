<?php
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kuliner_m');
    }
    function index(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kaca Pertama';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        // $data['rata'] = $this->Kuliner_m->get_rata();
        $data['rata_rating'] = $this->Kuliner_m->rata_rating();
        $data['jml_kuliner'] = $this->Kuliner_m->jml_kuliner();
        $data['jml_users'] = $this->Kuliner_m->jml_users();
        $data['jml_baru'] = $this->Kuliner_m->jml_baru();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['all'] = $this->Kuliner_m->get_all('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Navbar', $data);
        $this->load->view('User/Home', $data);
        $this->load->view('Templates/Footer', $data);
    }
}