<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {
	public function tambahKategori()
	{
		$data = [
				'nama_kategori' => $this->input->post('kategori')
		];

		$this->db->insert('kategori', $data);
	}

	public function getKategoriById($id)
	{
		return $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
	}

	public function ubahDataKategori($data)
	{
		$id_kategori = $data['id_kategori'];
		$nama_kategori = $data['kategori'];
		// var_dump($data); die;
		$this->db->where('id_kategori', $id_kategori);
		$this->db->set('nama_kategori', $nama_kategori);
		$this->db->update('kategori');
	}

	public function getAllKategori($limit, $start, $keyword = null)
	{
		if($keyword)
		{
			$this->db->like('nama_kategori', $keyword);
		}
		return $this->db->get('kategori', $limit, $start)->result_array();
	}

}