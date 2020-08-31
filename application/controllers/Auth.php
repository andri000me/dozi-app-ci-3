<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
        
	}

	public function index()
    {
        $this->sesiLogin();
        $data['title'] = 'Login Page';

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if($this->form_validation->run() == FALSE) {
	        $this->load->view('themeplates_admin/header', $data);
	        $this->load->view('auth/login', $data);
	        $this->load->view('themeplates_admin/footer', $data);
	    } else {
	    	$this->_login();
	    }
    }

    private function _login()
    {
        
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');

    	$user = $this->db->get_where('user', ['username' => $username])->row_array();

    	if($user != null) {
    		if(password_verify($password, $user['password'])) {
    			// jika pass benar
    			$data = [
    					'id_user' => $user['id_user'],
    					'username' => $user['username'],
    					'role_id' => $user['role_id'],
    			];
    			// masukan ke dalam session
    			$this->session->set_userdata($data);

    			if($user['role_id'] == 1) {
    				redirect('admin/dashboard');
    			} else {
    				redirect('user/dashboard');
    			}
    		} else {
    			// jika password salah
    			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-info-circle"></i> Password Wrong!.</div>');
        		redirect('auth');
    		}
    	} else {
    		// jika akun belum di daftar
    		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-info-circle"></i> Account has not been registered, please register.</div>');
        	redirect('auth/registration');
    	}
    }

    public function registration()
    {
        $this->sesiLogin();
        $data['title'] = 'Page Registration';

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]|min_length[4]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if($this->form_validation->run() == FALSE) {
	        $this->load->view('themeplates_admin/header', $data);
	        $this->load->view('auth/registration', $data);
	        $this->load->view('themeplates_admin/footer', $data);
        } else {
        	$this->Auth_model->addUser();
        	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> User added successfully</div>');
        	redirect('auth');
        }
    }

    public function logout()
    {
    	$this->session->unset_userdata('id_user');
    	$this->session->unset_userdata('username');
    	$this->session->unset_userdata('role_id');
    	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Was successful logout</div>');
        redirect('auth');
    }

    public function sesiLogin()
    {
        if($this->session->userdata('role_id') == 1) {
            redirect('admin/dashboard');
        } else if($this->session->userdata('role_id') == 2) {
            redirect('user/dashboard');
        }
    }

    public function change()
    {
        $data['title'] = 'Page Registration';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required|trim');
        $this->form_validation->set_rules('password1', 'New Password', 'required|trim|min_length[4]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password2]');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('themeplates_admin/header', $data);
            $this->load->view('auth/change', $data);
            $this->load->view('themeplates_admin/footer', $data);
        } else {
            $oldPassword = $this->input->post('oldpassword', true);
            $password1 = $this->input->post('password1', true);
            $password2 = $this->input->post('password2', true);
            if(!password_verify($oldPassword, $data['user']['password'])) {
            // var_dump($data['user']['password']); die;
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-info-circle"></i> Your old password is wrong.</div>');
                redirect('auth/change');
            } else {
                if($oldPassword == $password1) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-info-circle"></i> New password, same as old password. try to change another.</div>');
                    redirect('auth/change');
                } else {
                    // jika pegecekan lolos smua
                    $passwordHash = password_hash($password1, PASSWORD_DEFAULT);

                    $this->db->set('password', $passwordHash);
                    $this->db->where('id_user', $this->session->userdata('id_user'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> Password changed successfully.</div>');
                    redirect('auth/change');
                }
            }
            
        }
    }

}