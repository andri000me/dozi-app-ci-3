<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cekLogin();
        $this->load->model('Komentar_model');
        $this->load->model('Artikel_model');
	}

    public function index()
    {
        if($this->session->userdata('role_id') == 2) {
            redirect('user/dashboard');
        }
        $data['title'] = 'Page Komentar';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        if($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword');
        } else if(!$this->input->post('submit')) {
            $data['keyword'] = $this->session->unset_userdata('keyword');
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('email_komen', $data['keyword']);
        $this->db->like('nama_komen', $data['keyword']);
        $this->db->from('komentar');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        // Pagination
        $config['base_url'] = 'http://localhost/dozi-app-ci-3/admin/komentar/index';
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

        $data['komentar'] = $this->Komentar_model->joinKomentarArtikel($config['per_page'] ,$data['start'] ,$data['keyword']);
        $data['statusartikel'] = $this->Artikel_model->countStatusArtikel();
        $this->load->view('themeplates_admin/header', $data);
        $this->load->view('themeplates_admin/sidebar', $data);
        $this->load->view('admin/komentar/index', $data);
        $this->load->view('themeplates_admin/footer');
    }

    public function send()
    {
        $id_artikel = $this->input->post('id_artikel', true);
        $this->Komentar_model->sendMail($id_artikel);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Komentar Berhasil Dikirim!</strong> Tunggu untuk admin konfirmasi komentar anda.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('artikel/read/'.$id_artikel);
    }

    public function reply()
    {
        $id_artikel = $this->input->post('id_artikel', true);
        $this->Komentar_model->replyMail($id_artikel);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Komentar Berhasil Dikirim!</strong> Tunggu untuk admin konfirmasi komentar anda.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('artikel/read/'.$id_artikel);
    }

    public function getsetuju()
    {
        // echo $_POST['id'];
        echo json_encode($this->Komentar_model->getAllKomenJS($_POST['id']));
    }

    public function status()
    {
        $this->Komentar_model->updateStatus($_POST);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Status Komentar Berhasil Diperbarui.</div>');
        redirect('admin/komentar');
    }

    public function hapus($id)
    {
        $this->db->delete('komentar', ['id_komentar' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Data Komentar Berhasil Dihapus.</div>');
        redirect('admin/komentar');
    }

}