<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Home_model');
    }

    public function read($id)
    {
    	$data['title'] = 'Read Game';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['artikel'] = $this->Home_model->readKategoriArtikelById($id);
        $data['judulkategori'] = $this->Home_model->titleKategoriArtikelById($id);
        $data['komentar'] = $this->db->get_where('komentar', ['id_artikel' => $id, 'status_komen' => '1'])->result_array();
        $this->load->view('themeplate/header', $data);
        $this->load->view('themeplate/sidebar', $data);
        $this->load->view('home/read', $data);
        $this->load->view('themeplate/footer', $data);
    }

    

}