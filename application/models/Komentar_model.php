<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model {
	public function joinKomentarArtikel($limit, $start, $keyword = null)
	{
		if($keyword) {
			$this->db->like('nama_komen', $keyword);
			$this->db->like('email_komen', $keyword);
		}
		$this->db->select('*');
		$this->db->from('komentar');
		$this->db->join('artikel', 'artikel.id_artikel = komentar.id_artikel');
		return $this->db->get('', $limit, $start)->result_array();
	}

	public function sendMail($id_artikel)
	{
		$data = [
				'status_komen' => '0',
				'nama_komen' => $this->input->post('nama'),
				'email_komen' => $this->input->post('email'),
				'isi_komen' => $this->input->post('komentar'),
				'id_artikel' => $id_artikel
		];

		$this->db->insert('komentar', $data);
	}

	public function replyMail($id_artikel)
	{
		$data = [
				'status_komen' => '0',
				'nama_komen' => $this->input->post('nama'),
				'email_komen' => $this->input->post('email'),
				'isi_komen' => $this->input->post('komentar'),
				'id_artikel' => $id_artikel
		];

		$this->db->insert('komentar', $data);
	}

	public function getAllKomenJS($id)
	{
		return $this->db->get_where('komentar', ['id_komentar' => $id])->row_array();
	}

	public function updateStatus($data)
	{
		// var_dump($data); die;
		$id_komentar = $data['id_komentar'];
		$status_komen = $data['status'];
		// var_dump($id_komentar); die;
		$this->db->set('status_komen', $status_komen);
		$this->db->where('id_komentar', $id_komentar);
		$this->db->update('komentar');
	}

}