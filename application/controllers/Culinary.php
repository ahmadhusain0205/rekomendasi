<?php
class Culinary extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    function index(){
        $data['jml_user'] = $this->Kuliner_m->jml_user();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Kuliner';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Navbar', $data);
        $this->load->view('User/Culinary', $data);
        $this->load->view('Templates/Footer', $data);
    }
    function rating(){
        $this->form_validation->set_rules('id_user', 'User', 'required|trim');
        $this->form_validation->set_rules('id_kuliner', 'Kuliner', 'required|trim');
        $this->form_validation->set_rules('id_rating', 'Rating', 'required|trim');
        if($this->form_validation->run() == true){
            $id_user = $this->input->post('id_user');
            $id_kuliner = $this->input->post('id_kuliner');
            $id_rating = $this->input->post('id_rating');
            $this->db->query('update similarity set id_rating = '.$id_rating.' where id_user = '.$id_user.' and id_kuliner = '.$id_kuliner);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Mantap!</strong> Matur suwun wes repot-repot ngenilai!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Culinary');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ngapuro!</strong> Ono kesalahan teknis, njajal meneh wae!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Culinary');
        }
    }
}