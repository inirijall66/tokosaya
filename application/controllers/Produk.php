<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//load model -> model_products
		$this->load->model('model_products');
	}

	
	public function index()
	{
		$this->load->view('form_produk');
	}
	public function add()
	{
		$this->load->view('form_add');
	}
public function edit($id){
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required|integer');
		$this->form_validation->set_rules('harga', 'harga', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['as'] = $this->model_products->find($id);
			$this->load->view('form_edit', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				//form submit dengan gambar diisi
				//load uploading file library
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png|zip|docx';
				$config['max_size']	= '300'; //KB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['as'] = $this->model_products->find($id);
					$this->load->view('form_edit', $data);
				} else {
				//form submit dengan gambar dikosongkan
				$gambar = $this->upload->data();
				$data_product =	array(
					'nama_produk'			=> set_value('nama_produk'),
					'stok'			=> set_value('stok'),
					'harga'			=> set_value('harga'),
					'image'			=> $gambar['file_name']
				);
				$this->model_products->update($id, $data_product);
				redirect('Produk');
			}
		}
		else {
				//form submit dengan gambar dikosongkan
				$data_product =	array(
					'nama_produk'	=> set_value('nama_produk'),
					'harga'	=> set_value('harga'),
					'stok'			=> set_value('stok')
				);
				$this->model_products->update($id, $data_product);
				redirect('Produk');
			}
		}
	}
	
	public function create(){
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('nama_produk', 'Product Name', 'required');
		$this->form_validation->set_rules('stok', 'Product Description', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_add');
		} else {
			//load uploading file library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|zip|docx';
			$config['max_size']	= '3000'; //KB
			$config['max_width']  = '2000'; //pixels
			$config['max_height']  = '2000'; //pixels

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				//file gagal diupload -> kembali ke form tambah
				$this->load->view('form_add');
			} else {
				//file berhasil diupload -> lanjutkan ke query INSERT
				// eksekusi query INSERT
				$gambar = $this->upload->data();
				$data_products =	array(
					'nama_produk' => set_value('nama_produk'),
					'stok'	=> set_value('stok'),
					'harga'	=> set_value('harga'),
					'image'	=> $gambar['file_name']
				);
				$this->model_products->create($data_products);
				redirect('produk');
			}
			
		}
	}
	
		
public function delete($id){
		$this->model_products->delete($id);
		redirect('produk');
	}
	
	
	


}
