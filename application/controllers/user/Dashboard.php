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
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['statusartikel'] = $this->Artikel_model->countStatusArtikelUser();
        $this->load->view('themeplates_admin/header', $data);
        $this->load->view('themeplates_admin/sidebar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('themeplates_admin/footer', $data);
    }

}