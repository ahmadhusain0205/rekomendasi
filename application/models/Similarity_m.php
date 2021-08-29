<?php
class Similarity_m extends CI_Model{
    function data_user_end(){
        $user_end = $this->db->query('select id from user order by id desc limit 1')->result();
    }
}