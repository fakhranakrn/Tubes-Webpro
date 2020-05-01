<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model akun
        $this->load->model('AkunModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Login';
        // session_start();

        $this->form_validation->set_rules('emailL', 'Email', 'required');
        $this->form_validation->set_rules('passL','pswd','required');

        $email = $this->input->post('emailL',true);

       

        if($this->form_validation->run() == false){
            $this->load->view('templates/header',$data);
            $this->load->view('drew/login');
            $this->load->view('templates/footer');
        }
        else
        {
            // get data akun dari email yg diinputin
            $data = $this->AkunModel->getAkunByEmail($email);
            if($data){
                $cek = $this->input->post('passL');

                // get password dari email yg diinputin
                $data2 = $this->AkunModel->getAkunByPassword($email);
                
                if ($data['password'] == $cek) {
                    echo 'password benar';
                    $sess_data = array(
                        'idAkun' => $data['idAkun'],
                        'firstname' => $data['firstname'],
                        'lastname' => $data['lastname'],
                        'email' => $data['email'],
                        'password' => $data['password']
                    );
                    $this->session->set_userdata('data_akun',$sess_data);
                    // var_dump($this->session->userdata('data_akun');
                    redirect('HomeController');
                }
                else
                {
                    redirect('Login'); //pass salah
                }

            }
            else{
                redirect('Login'); //email salah
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('drew/login');
    }
    
}