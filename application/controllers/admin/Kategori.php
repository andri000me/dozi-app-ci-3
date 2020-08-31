<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
        $this->load->model('Artikel_model');
        cekLogin();
	}

    public function index()
    {
        $data['title'] = 'Page Kategori';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        if($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword');
        } else if(!$this->input->post('submit')) {
            $data['keyword'] = $this->session->unset_userdata('keyword');
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama_kategori', $data['keyword']);
        $this->db->from('kategori');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        // Pagination
        $config['base_url'] = 'http://localhost/dozi-app-ci-3/admin/kategori/index';
        // $config['total_rows'] = $this->Artikel_model->countAllArtikel();
        // var_dump($config['total_rows']); die;
        $config['per_page'] = 2;
        $config['num_links'] = 2;

        // style
        $config['full_tag_open'] = '<nav class="d-inline-block"><ul class="pagination mb-0">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['kategori'] = $this->Kategori_model->getAllKategori($config['per_page'] ,$data['start'] ,$data['keyword']);
        $data['statusartikel'] = $this->Artikel_model->countStatusArtikel();
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        if($this->form_validation->run() == FALSE) {
	        $this->load->view('themeplates_admin/header', $data);
	        $this->load->view('themeplates_admin/sidebar', $data);
	        $this->load->view('admin/kategori/index', $data);
	        $this->load->view('themeplates_admin/footer');
        } else {
        	$this->Kategori_model->tambahKategori();
        	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Kategori Berhasil Ditambahkan.</div>');
        	redirect('admin/kategori');
        }
    }

    public function getubahkategori() 
	{
		// echo $_POST['id'];
		echo json_encode($this->Kategori_model->getKategoriById($_POST['id']));
	}

	// aksi ubah data artikel
	public function ubahkategori()
	{
		$this->Kategori_model->ubahDataKategori($_POST);
		$this->session->set_flashdata('message', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Data Kategori Berhasil <strong>Diubah</strong>.</div>');
		redirect('admin/kategori');
	}

	public function hapus($id)
	{
		$this->db->delete('kategori', ['id_kategori' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Data Kategori Berhasil <strong>Dihapus</strong>.</div>');
		redirect('admin/kategori');
	}

}