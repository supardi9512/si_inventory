<?php
class Inventory extends CI_model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('t_produk')->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('t_produk', ['id' => $id])->row_array();
	}

	public function add()
	{

		$data = [
			"nama_barang" 	=> $this->input->post('nama_barang', true),
			"kode_barang" 	=> $this->input->post('kode_barang', true),
			"jumlah_barang" => $this->input->post('jumlah_barang', true),
			"tanggal" 		=> $this->input->post('tanggal', true)
		];

		$this->db->insert('t_produk', $data);
	}

	public function update($id)
	{
		$data = [
			"nama_barang" 	=> $this->input->post('nama_barang', true),
			"kode_barang" 	=> $this->input->post('kode_barang', true),
			"jumlah_barang" => $this->input->post('jumlah_barang', true),
			"tanggal" 		=> $this->input->post('tanggal', true)
		];

		$this->db->where('id', $id);
		$this->db->update('t_produk', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('kode_barang', $keyword);
		return $this->db->get('t_produk')->result_array();
	}

	public function delete($id)
	{
		$this->db->delete('t_produk', ['id' => $id]);
	}
}
