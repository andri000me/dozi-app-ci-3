<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cekLogin();
        $this->load->model('Artikel_model');
	}
    public function index()
    {
        if($this->session->userdata('role_id') == 2) {
            redirect('user/dashboard');
        }
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['statusartikel'] = $this->Artikel_model->countStatusArtikel();
        $this->load->view('themeplates_admin/header', $data);
        $this->load->view('themeplates_admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('themeplates_admin/footer');
    }

}