<?php
class Auth_m extends CI_Model{
    function get_data($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        return $this->db->get();
    }
    function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
}