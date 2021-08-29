<?php
class Kuliner_m extends CI_Model{
    // function get_rata(){
    //     $query = $this->db->query('select k.name_place, s.id_kuliner, avg(s.id_rating) as rating from similarity s join kuliner k on k.id=s.id_kuliner group by id_kuliner');
    //     if($query->num_rows() > 0){
    //         foreach($query->result() as $data){
    //             $hasil[] = $data;
    //         }
    //         return $hasil;
    //     }
    // }
    function get_join_kuliner($table){
        return $this->db->query('select k.id, k.name_place, k.address, k.link_maps, w.status from '.$table.' k join m_wifi w on w.id=k.id_wifi')->result();
    }
    function get($table){
        return $this->db->query('select * from '.$table)->result();
    }
    function get_data_admin($table)
    {
        $this->db->select($table.'.id, full_name, image, address, email, phone_number, id_gender, gender, id_religion, religion, password, date_created');
        $this->db->from($table);
        $this->db->join('m_gender', 'm_gender.id = ' . $table . '.id_gender');
        $this->db->join('m_religion', 'm_religion.id = ' . $table . '.id_religion');
        $this->db->where('id_role = 1');
        return $this->db->get();
    }
    function get_data_user($table)
    {
        $this->db->select($table.'.id, full_name, image, address, email, phone_number, id_gender, gender, id_religion, religion, password, date_created');
        $this->db->from($table);
        $this->db->join('m_gender', 'm_gender.id = ' . $table . '.id_gender');
        $this->db->join('m_religion', 'm_religion.id = ' . $table . '.id_religion');
        $this->db->where('id_role = 2');
        return $this->db->get();
    }
    function delete($where, $table)
    {
        $this->db->delete($table, $where);
    }
    function rata_rating(){
        return $this->db->query('select DISTINCT(round(avg(id_rating),2)) as rating from similarity WHERE id_rating in (SELECT max(id_rating) FROM similarity) group by id_kuliner')->result();
    }
    function jml_kuliner(){
        return $this->db->query('select * from kuliner')->num_rows();
    }
    function jml_users(){
        return $this->db->query('select * from user where id_role=2')->num_rows();
    }
    function jml_baru(){
        return $this->db->query('SELECT id_user FROM similarity WHERE id_user not in (SELECT id_user FROM similarity WHERE id_rating is not null) GROUP BY id_user')->num_rows();
    }
    function kuliner(){
        return $this->db->query('
            select similarity.id, id_kuliner, id_user, id_rating, id_wifi, name_place, image, address, link_maps, status
            from similarity
            join kuliner
            on similarity.id_kuliner=kuliner.id
            join m_wifi
            on kuliner.id_wifi=m_wifi.id
            where id_user = '.$this->session->userdata('id').'
            group by id_kuliner
            order by name_place asc
        ')->result();
        
    }
    function get_all($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('m_role', 'm_role.id = '.$table.'.id_role');
        $this->db->join('m_gender', 'm_gender.id = '.$table.'.id_gender');
        $this->db->join('m_religion', 'm_religion.id = '.$table.'.id_religion');
        return $this->db->get();
    }
    function jml_user(){
        return $this->db->query('select count(distinct(id_user)) as count_user from similarity')->result();
    }
    function hasil(){
        return $this->db->query('select s.id, s.id_kuliner, s.id_rating, s.id_user, k.image, k.name_place, k.address, k.link_maps, w.status from similarity s join kuliner k on k.id=s.id_kuliner join m_wifi w on w.id=k.id_wifi WHERE s.id_rating is null and s.id_user = '.$this->session->userdata('id').' group by id_kuliner')->result();
    }
    function rekomen(){
        // $pendekatan = $this->db->query('SELECT id_user, id_target, cf FROM `v_hasil` WHERE cf in (SELECT max(cf) FROM v_hasil WHERE id_target = '.$this->session->userdata('id').')')->result();
        // foreach($pendekatan as $p){
        // }
            return $this->db->query('SELECT s.id, s.id_user, s.id_kuliner, s.id_rating, k.name_place, k.address, k.link_maps, k.image, w.status FROM similarity s join kuliner k on k.id=s.id_kuliner join m_wifi w on w.id = k.id_wifi WHERE s.id_user in (SELECT id_user FROM v_hasil WHERE cf in (SELECT max(cf) FROM v_hasil WHERE id_target = '.$this->session->userdata('id').')) and s.id_kuliner in (SELECT id_kuliner FROM similarity WHERE id_user = '.$this->session->userdata('id').' and id_rating is null) and s.id_rating >= 4')->result();

        // return $this->db->query('select s.id, s.id_kuliner, s.id_rating, (SELECT avg(z.id_rating) from similarity z WHERE z.id_kuliner=s.id_kuliner) as rating, s.id_user, k.image, k.name_place, k.address, k.link_maps, w.status from similarity s join kuliner k on k.id=s.id_kuliner join m_wifi w on w.id=k.id_wifi where s.id_user in (SELECT id_user FROM v_hasil) and id_kuliner in (SELECT id_kuliner FROM similarity WHERE id_rating is null) and (SELECT avg(z.id_rating) from similarity z WHERE z.id_kuliner=s.id_kuliner) > 4 ORDER BY s.id_rating DESC')->result();
    }
}