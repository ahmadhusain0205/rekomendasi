<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Block extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $data['judul'] = 'Block';
        $data['kuliner'] = $this->Kuliner_m->kuliner();
        $data['rekomen'] = $this->Kuliner_m->rekomen();
        $data['hasil'] = $this->Kuliner_m->hasil();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Block');
        $this->load->view('Templates/Footer');
    }
}