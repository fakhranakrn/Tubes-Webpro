<?php

class RegisterController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('RegisterModel');
		$this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = 'Create Account';
        $this->load->view('templates/header',$data);
        $this->load->view('drew/register');
        $this->load->view('templates/footer');
    }

    public function register() {
        $this->form_validation->set_rules('fname','First Name','required');
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Password','required');

        if ($this->form_validation->run() == FALSE) {
            // $this->session->set_flashdata('fail','Register Failed');
            $this->load->view('drew/register');
        } else {
            $this->RegisterModel->addAkun();
            // $this->session->set_flashdata('success','Register Success');
            redirect('drew/home');
        }
    }

}
?>