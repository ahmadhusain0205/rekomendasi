<?php
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kuliner_m');
    }
    function index(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jml_user'] = $this->Kuliner_m->jml_user();
        $data['judul'] = 'Kaca Ngarep';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['hasil'] = $this->Kuliner_m->hasil();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Navbar', $data);
        $this->load->view('User/Dashboard', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function pendekatan(){
        $limit = $this->db->query('select count(distinct(id_target)) as jml from v_hasil2')->result();
        foreach($limit as $l){
            $pendekatan = $this->db->query('select * from v_hasil2 group by id_user, id_target order by cf desc limit '.$l->jml)->result();
        }
        echo json_encode($pendekatan);
    }
}