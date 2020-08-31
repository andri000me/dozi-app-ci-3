<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('Artikel_model');
		cekLogin();
	}

    public function index()
    {
        $data['title'] = 'Page Article';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        if($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword');
        } else if(!$this->input->post('submit')) {
            $data['keyword'] = $this->session->unset_userdata('keyword');
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // $this->db->like('judul_artikel', $data['keyword']);
        // $this->db->from('artikel');
        // $config['total_rows'] = $this->db->count_all_results();
        // $data['total_rows'] = $config['total_rows'];
        // Pagination
        $config['base_url'] = 'http://localhost/dozi-app-ci-3/user/artikel/index';
        $config['total_rows'] = $this->Artikel_model->countAllArtikelUser();
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
        $data['artikel'] = $this->Artikel_model->joinArtikelKategoriUser($config['per_page'], $data['start'], $data['keyword']);
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['statusartikel'] = $this->Artikel_model->countStatusArtikelUser();
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('themeplates_admin/header', $data);
            $this->load->view('themeplates_admin/sidebar', $data);
            $this->load->view('user/artikel/index', $data);
            $this->load->view('themeplates_admin/footer');
        } else {
            $this->Artikel_model->tambahArtikelUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Artikel Berhasil Ditambahkan.</div>');
            redirect('user/artikel');
        }
    }

    public function review($id)
    {
        $data['title'] = 'Review Artikel';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['artikel'] = $this->Artikel_model->reviewArtikelKategori($id);
        $this->form_validation->set_rules('judul', 'Judul Artikel', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Deskripsi', 'required|trim');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('themeplates_admin/header', $data);
            $this->load->view('user/artikel/review', $data);
            $this->load->view('themeplates_admin/footer');
        } else {
            $this->Artikel_model->reviewUbahUser($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Artikel Berhasil <strong>Diperbarui.</strong>.</div>');
            redirect('user/artikel');
        }
    }

    public function hapus($id)
    {
        $this->db->where('id_artikel', $id);
        $result = $this->db->get('artikel')->row_array();
        unlink('./assets/img/berita/' . $result['foto_artikel']);
        $this->db->delete('artikel', ['id_artikel' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Artikel Berhasil <strong>Dihapus</strong>.</div>');
        redirect('user/artikel');
    }

    public function persetujuan()
    {
        $data['title'] = 'Menunggu Persetujuan Artikel';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['statusartikel'] = $this->Artikel_model->countStatusArtikelUser();
        $data['persetujuan'] = $this->Artikel_model->getAllArtUser();
        $this->load->view('themeplates_admin/header', $data);
        $this->load->view('themeplates_admin/sidebar', $data);
        $this->load->view('user/artikel/persetujuan', $data);
        $this->load->view('themeplates_admin/footer');
    }

}