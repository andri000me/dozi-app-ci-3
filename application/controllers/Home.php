<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$data['title'] = 'Dozi APK';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();

        // Search
        if($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword');
        } else if(!$this->input->post('submit')) {
            $data['keyword'] = $this->session->unset_userdata('keyword');
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('judul_artikel', $data['keyword']);
        $this->db->from('artikel');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];

        // Pagination
        $config['base_url'] = 'http://localhost/dozi-app-ci-3/home/index';
        // $config['total_rows'] = $this->Home_model->countAllArtikel();
        // var_dump($config['total_rows']); die;
        $config['per_page'] = 6;
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

        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->Home_model->getAllArtikelUserKategori($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('themeplate/header', $data);
        $this->load->view('themeplate/sidebar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('themeplate/footer', $data);
	}

	public function categori($id)
	{
		$data['title'] = 'Catagory Game';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['judulkategori'] = $this->Home_model->titleKategoriArtikelById($id);
        $data['artikel'] = $this->Home_model->getKategoriById($id);
        $this->load->view('themeplate/header', $data);
        $this->load->view('themeplate/sidebar', $data);
        $this->load->view('home/kategori', $data);
        $this->load->view('themeplate/footer', $data);
	}

}