<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {
	public function joinArtikelKategori($limit, $start, $keyword = null)
	{
		if($keyword) {
			$this->db->like('judul_artikel', $keyword);
			$this->db->or_like('nama_kategori', $keyword);
		}
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
		$this->db->join('user', 'user.id_user = artikel.id_user');
		return $this->db->get('', $limit, $start)->result_array();
	}

	public function tambahArtikel()
	{
		$foto = $_FILES['foto']['name'];

		if($foto) {
			$config['allowed_types'] = 'png|jpg';
			$config['max_sizes'] = '2048';
			$config['upload_path'] = './assets/img/berita/';

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')) {
				$this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}

		$data = [
			'judul_artikel' => $this->input->post('judul'),
			'deskripsi_artikel' => $this->input->post('deskripsi'),
			'id_kategori' => $this->input->post('kategori'),
			'status_artikel' => '0',
			'id_user' => $this->session->userdata('id_user'),
			'tgl_post' => date('Y-m-d'),
			'foto_artikel' => $foto
		];

		$this->db->insert('artikel', $data);
	}

	public function aksiUbahArtikel($data)
	{
		$id_artikel = $data['id_artike'];
		$foto = $_FILES['foto']['name'];

		if($foto) {
			$config['allowed_types'] = 'png|jpg';
			$config['max_sizes'] = '2048';
			$config['upload_path'] = './assets/img/berita/';

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')) {
				$result = $this->db->get_where('artikel', ['id_artikel' => $id_artikel])->row_array();
				$row = $result['foto_artikel'];
				if($row == $data['fotoLama']) {
					unlink(FCPATH . 'assets/img/berita/' . $row);
				}
				$fotoBaru = $this->upload->data('file_name');
				$this->db->set('foto_artikel', $fotoBaru);
			} else {
				echo $this->upload->display_errors();
			}
		}

		// var_dump($data); die;
		$data = [
			'judul_artikel' => $data['judul'],
			'deskripsi_artikel' => $data['deskripsi'],
			'id_kategori' => $data['kategori']
		];

		$this->db->set($data);
		$this->db->where('id_artikel', $id_artikel);
		$this->db->update('artikel');
	}

	public function getUbah($id)
	{
		return $this->db->get_where('artikel', ['id_artikel' => $id])->row_array();
	}

	public function countAllArtikel()
	{
		return $this->db->get('artikel')->num_rows();
	}

}