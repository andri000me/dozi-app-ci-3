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
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['komentar'] = $this->Komentar_model->joinKomentarArtikel();
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

}