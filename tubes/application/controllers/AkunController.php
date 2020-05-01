<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AkunController extends CI_Controller {
    public function getIdAkunSession() {
        return $this->session->userdata('idAkun');
    }
    // $S_idAkun = $this->session->userdata('idAkun');

    public function __construct() {
        parent::__construct();
        $this->load->model('AkunModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = 'Profile';
        // $data['dataakun'] = $this->session->all_userdata();
        $this->load->view('templates/header',$data);
        $this->load->view('drew/profile',$data);
        $this->load->view('templates/footer');
    }

    public function register() {
        $data['judul'] = 'Create Account';

        $this->form_validation->set_rules('fname','First Name','required');
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('drew/register');
            $this->load->view('templates/footer');
        } else {
            $this->AkunModel->addAkun();
            redirect('HomeController');
        }
    }
    public function editData() {
        $data['judul'] = 'Profile';

        $dataAkun = $this->session->userdata('data_akun');

        // $data['dataakun'] = $this->AkunModel->getAkunById($idAkun_p);
        $this->form_validation->set_rules('fnameP','First Name','required');
        $this->form_validation->set_rules('lnameP','Last Name','required');
        $this->form_validation->set_rules('emailP','Email','required');
        $this->form_validation->set_rules('passP','Password','required');

        if (!$this->form_validation->run() == FALSE) {
            
            $h = [
                "firstname" => $this->input->post('fnameP', true),
                "lastname" => $this->input->post('lnameP', true),
                "email" => $this->input->post('emailP', true),
                "password" => $this->input->post('passP', true)
            ];
            $this->AkunModel->editAkun($dataAkun['idAkun'],$h);
            redirect('HomeController');

        } else {
            $this->load->view('templates/header',$data);
            $this->load->view('drew/profile',$data);
            $this->load->view('templates/footer');
        }
    }

    public function delete() {
        $dataAkun = $this->session->userdata('data_akun');
        $this->AkunModel->deleteAkun($dataAkun['idAkun']);
        $this->session->sess_destroy();
        redirect('HomeController');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('HomeController');
    }
}

?>