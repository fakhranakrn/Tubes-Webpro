<?php
defined('BASEPATH') OR exit('No direct script allowed');

class AkunModel extends CI_Model {
    //ngambil idAkun yg udah login
    public function loggedInAkun() {
        $sess_data = $this->session->all_userdata();
        if (isset($sess_data)) {
            return true;
        } else {
            return false;
        }
        // return $this->session->userdata('idAkun');
    }

    public function getAkunById($idAkun) {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('idAkun',$idAkun);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function getAkunByEmail($email) {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('email',$email);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getAkunByPassword($email) {
        $this->db->select('password');
        $this->db->from('akun');
        $this->db->where('email',$email);
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

    public function editAkun($idAkun,$data) {
        // $this->session->userdata('idAkun');
        
        $this->db->where('idAkun',$idAkun);
        $this->db->update('akun',$data);
    }

    public function deleteAkun($idAkun) {
        $this->db->where('idAkun',$idAkun);
        $this->db->delete('akun');
    }
}
?>