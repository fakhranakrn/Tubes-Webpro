<?php
defined('BASEPATH') OR exit('No direct script allowed');

class RegisterModel extends CI_Model {
    public function getAllAkun() {
        $this->db->select('*');
        $this->db->from('akun');
    }

    public function getAkunById() {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('idAkun',$idAkun);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function addAkun() {
        $data = [
            "firstname" => $this->input->post('fname',true),
            "lastname" => $this->input->post('lname',true),
            "email" => $this->input->post('email',true),
            "password" => $this->input->post('pass',true)
        ];

        $this->db->insert('akun', $data);
    }
}

?>