<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function getAllUser($limit, $start, $keyword = null)
	{
		if($keyword)
		{
			$this->db->like('username', $keyword);
        	$this->db->or_like('email', $keyword);
        	$this->db->or_like('nama_user', $keyword);
		}
		$this->db->order_by('id_user', 'DESC');
		return $this->db->get('user', $limit, $start)->result_array();
	}

	public function tambahUser()
	{
		$foto = $_FILES['foto']['name'];

		if($foto) {
			$config['allowed_types'] = 'gif|png|jpg';
			$config['max_sizes'] = '2048';
			$config['upload_path'] = './assets/img/user/';

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')) {
				$this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}
		$data = [
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'nama_user' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'role_id' => '2',
			'foto_user' => $foto,
		];

		$this->db->insert('user', $data);
	}

	public function getUserById($id)
	{
		return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function ubahDataUser($data)
	{
		$id_user = $data['id_user'];
		$foto = $_FILES['foto']['name'];

		if($foto) {
			$config['allowed_types'] = 'png|jpg';
			$config['max_sizes'] = '2048';
			$config['upload_path'] = './assets/img/user/';

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')) {
				$result = $this->db->get_where('user', ['id_user' => $id_user])->row_array();
				$row = $result['foto_user'];
				if($row == $data['fotoLama']) {
					unlink(FCPATH . 'assets/img/user/' . $row);
				} else if($row != 'default.jpg') {
					unlink(FCPATH . 'assets/img/user/' . $row);
				}
				// $fotoLama = $data['foto_user'];
				// if($fotoLama != 'default.jpg') {
				// 	unlink(FCPATH . 'assets/img/user/' . $fotoLama);
				// }
				$fotoBaru = $this->upload->data('file_name');
				$this->db->set('foto_user', $fotoBaru);
			} else {
				echo $this->upload->display_errors();
			}
		}

		// var_dump($data); die;
		$data = [
			'username' => $data['username'],
			'password' => password_hash($data['password'], PASSWORD_DEFAULT),
			'nama_user' => $data['nama'],
			'email' => $data['email']
		];

		$this->db->set($data);
		$this->db->where('id_user', $id_user);
		$this->db->update('user');
	}
	

}