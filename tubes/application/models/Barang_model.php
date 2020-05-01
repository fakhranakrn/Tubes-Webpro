<?php

defined('BASEPATH') OR exit('No direct script allowed');

class Barang_model extends CI_model
{

	public function getAllBarang()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$query = $this->db->get();
        return $query->result_array();
	}

	

	public function tambahDataBarang()
	{
		
			
		$config['upload_path']         = 'images/';  // folder upload 
		$config['allowed_types']        = 'gif|jpg|png'; // jenis file
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		// var_dump($this->input->post('foto'));
		// exit();

		if (!$this->upload->do_upload('foto')) //sesuai dengan name pada form 
			{
					echo 'anda gagal upload';
			}
		$file = $this->upload->data();	
		$gambar = $file['file_name'];
		
		
		$data = [
			"namabarang" => $this->input->post('namabarang', true),
			"harga" => $this->input->post('harga', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"foto" => $gambar,
		];
		// var_dump($data["foto"]);
		// exit();
		// $this->do_upload($data["foto"]);

		$this->db->insert('barang',$data);
		
	}

	public function hapusDataBarang($id)
	{
		$this->db->where('idBarang',$id);
		$this->db->delete('barang');
	}

	public function getBarangById($id)
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('idBarang', $id);
		$query = $this->db->get();
        return $query->row_array();
	}

	public function ubahDataBarang($id)
	{
		$data = [
			"namabarang" => $this->input->post('namabarang', true),
			"harga" => $this->input->post('harga', true),
			"deskripsi" => $this->input->post('deskripsi', true),
		];
		$this->db->where('idBarang',$id);
		$this->db->update('barang',$data);
	}

	public function cariDataBarang()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->like('namabarang',$keyword);
		$this->db->or_like('harga',$keyword);
		$this->db->or_like('deskripsi',$keyword);
        $this->db->or_like('email',$keyword);
        
		$cari = $this->db->get();
		return $cari->result_array();
	}
}
