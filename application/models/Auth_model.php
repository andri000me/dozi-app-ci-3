<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	public function addUser()
	{
		$data = [
				'username' => $this->input->post('username', true),
				'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
				'nama_user' => $this->input->post('name', true),
				'email' => $this->input->post('email', true),
				'role_id' => '2',
				'foto_user' => 'default.jpg'
		];

		$this->db->insert('user', $data);
	}

}