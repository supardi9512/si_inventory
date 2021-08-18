<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InventoryController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Inventory');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Sistem Informasi Inventory';

		$this->load->view('template/header', $data);
		$this->load->view('section/index', $data);
		$this->load->view('template/footer');
	}

	public function view()
	{
		$data['judul'] = 'Data Produk';
		$data['produk'] = $this->Inventory->get();

		if ($this->input->post('keyword')) {
			$data['produk'] = $this->Inventory->search();
		}

		$this->load->view('template/header', $data);
		$this->load->view('section/data', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Form Tambah Data Produk';
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
		$this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('section/add');
			$this->load->view('template/footer');
		} else {
			$this->Inventory->add();
			redirect('view');
		}
	}

	public function update($id)
	{
		$data['judul'] = 'Form Ubah Data Produk';
		$data['data'] = $this->Inventory->getById($id);
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
		$this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('section/update', $data);
			$this->load->view('template/footer');
		} else {
			$this->Inventory->update($id);
			redirect('view');
		}
	}

	public function delete($id)
	{
		$this->Inventory->delete($id);
		redirect('view');
	}
}
