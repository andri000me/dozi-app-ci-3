<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	public function getAllArtikelUserKategori($limit, $start, $keyword = null)
	{
		if($keyword) {
			$this->db->like('judul_artikel', $keyword);
		}
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('user', 'user.id_user = artikel.id_user');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
		$this->db->where('status_artikel', '1');
		$this->db->order_by('id_artikel', 'DESC');
		return $this->db->get('', $limit, $start)->result_array();
	}

	public function getKategoriById($id)
	{
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('user', 'user.id_user = artikel.id_user');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
		$this->db->where('artikel.id_kategori', $id);
		$this->db->order_by('id_artikel', 'DESC');
		return $this->db->get()->result_array();
	}

	public function readKategoriArtikelById($id)
	{
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
		$this->db->join('user', 'user.id_user = artikel.id_user');
		$this->db->where('artikel.id_artikel', $id);
		$this->db->order_by('id_artikel', 'DESC');
		return $this->db->get()->row_array();
	}

	public function titleKategoriArtikelById($id)
	{
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
		$this->db->where('artikel.id_kategori', $id);
		$this->db->order_by('id_artikel', 'DESC');
		return $this->db->get()->row_array();
	}

	public function countAllArtikel()
	{
		return $this->db->get('artikel')->num_rows();
	}


}