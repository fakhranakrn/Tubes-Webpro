<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Barang extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');

    }


    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->Barang_model->getAllBarang();
        if ($this->input->post('keyword')) {
            $data['Barang'] = $this->Barang_model->cariDataBarang();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Barang';

		$this->form_validation->set_rules('namabarang','Nama Barang','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');

		$this->load->view('templates/header',$data);
        //$this->load->view('barang/tambah');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('barang/tambah');
		}
		
		else {

            
            $this->Barang_model->tambahDataBarang();
            
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('barang/index');
        }

        $this->load->view('templates/footer');
    }


    // public function do_upload(){
    //         $config = array(
    //         'upload_path' => "./uploads/",
    //         'allowed_types' => "gif|jpg|png|jpeg|pdf",
    //         'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    //         'max_height' => "768",
    //         'max_width' => "1024"
    //         );

    //         $this->load->library('upload', $config);
    //         var_dump("e");
            
    //         if($this->upload->do_upload('userfile'))
    //         {
    //             $data = array('upload_data' => $this->upload->data());
    //             $this->load->view('upload_success',$data);
    //         }
    //         else
    //         {
    //             $error = array('error' => $this->upload->display_errors());
    //             $this->load->view('custom_view', $error);
    //         }
    // }



        public function hapus($id)
        {
            
            $this->Barang_model->hapusDataBarang($id);
    
            //use flashdata to show alert "dihapus"
            $this->session->set_flashdata('flash','dihapus');
            redirect('barang/index');
                
        }
    
        public function ubah($id)
        {
            $data['judul'] = 'Form Ubah Data Barang';
            $data['barang'] = $this->Barang_model->getBarangById($id);
    
            $this->form_validation->set_rules('namabarang','Nama Barang','required');
            $this->form_validation->set_rules('harga','Harga','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
    
            $this->load->view('templates/header',$data);
    
    
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('barang/ubah',$data);
            }
    
            else {
                
                $this->Barang_model->ubahDataBarang($id);
                $this->session->set_flashdata('flash','diubah');
                redirect('barang/index');
            }

            $this->load->view('templates/footer');
           
        }
    }
    
		
		
	
