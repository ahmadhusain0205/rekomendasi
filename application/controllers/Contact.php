<?php
class Contact extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Kontak';
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Navbar', $data);
        $this->load->view('User/Contact', $data);
        $this->load->view('Templates/Footer', $data);
    }
}