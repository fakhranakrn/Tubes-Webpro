<?php

class HomeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index() {
        $data['judul'] = 'Drew House';
        $this->load->view('templates/header',$data);
        $this->load->view('drew/home');
        $this->load->view('templates/footer');
    }


    public function register() {
        $data['judul'] = 'Create Account';
        $this->load->view('templates/header',$data);
        $this->load->view('drew/register');
        // site_url('RegisterController/index');
        $this->load->view('templates/footer');
    }

    public function login() {
        $data['judul'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('drew/login');
        $this->load->view('templates/footer');
    }

    public function about() {
        $data['judul'] = 'About Us';
        $this->load->view('templates/header',$data);
        $this->load->view('drew/about');
        $this->load->view('templates/footer');
    }

    public function katalog() {
        $data['judul'] = 'Shop All';
        $dataKatalog = $this->Barang_model->getAllBarang();
        $this->load->view('templates/header',$data);
        $this->load->view('barang/katalog',['dataKatalog' =>$dataKatalog]);
        $this->load->view('templates/footer');
    }

    // isi footer
    public function contact() {
        $data['judul'] = 'Contact';
        $this->load->view('templates/header',$data);
        $this->load->view('footer/contact');
        $this->load->view('templates/footer');
    }

    public function returnpol() {
        $data['judul'] = 'Return Policy';
        $this->load->view('templates/header',$data);
        $this->load->view('footer/returnpol');
        $this->load->view('templates/footer');
    }

    public function intcust() {
        $data['judul'] = 'International Custom & Duties';
        $this->load->view('templates/header',$data);
        $this->load->view('footer/intcust');
        $this->load->view('templates/footer');
    }

    public function privacypol() {
        $data['judul'] = 'Privacy Policy';
        $this->load->view('templates/header',$data);
        $this->load->view('footer/privacypol');
        $this->load->view('templates/footer');
    }

    public function termsOfUse() {
        $data['judul'] = 'Terms Of Use';
        $this->load->view('templates/header',$data);
        $this->load->view('footer/termsOfUse');
        $this->load->view('templates/footer');
    }

    public function sizeChart(){
        $data['judul'] = 'Size Chart';
        $this->load->view('templates/header',$data);
        $this->load->view('footer/sizeChart');
        $this->load->view('templates/footer');
    }

    public function loginAdmin(){
        $data['judul'] = 'Login Admin';
        $this->load->view('templates/header',$data);
        $this->load->view('drew/loginAdmin');
        $this->load->view('templates/footer');
    }

    // public function barang(){
    //     $data['judul'] = 'Admin';
    //     $this->load->view('templates/header',$data);
    //     $this->load->view('drew/barang');
    //     $this->load->view('templates/footer');
    // }

    // public function catalog(){
    //     $data['judul'] = 'Catalog';
    //     $this->load->view('templates/header',$data);
    //     $this->load->view('drew/barang');
    //     $this->load->view('templates/footer');
    // }
}
?>