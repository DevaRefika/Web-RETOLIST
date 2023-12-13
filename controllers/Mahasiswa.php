<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index() {
        $this->load->view('login_view');
    }

    public function login() {
        $this->load->model('Mahasiswa_model');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->session->set_userdata('ses_nim',$data['nim']);
		$this->session->set_userdata('ses_username',$data['username']);
        
        $user = $this->Mahasiswa_model->get_user($username, $password);
        $admin = $this->Mahasiswa_model->get_admin($username, $password);
        if ($user) {
            // Set user data in session
            $this->session->set_userdata('ses_nim', $user['nim']);
            $this->session->set_userdata('ses_username', $user['username']);
            // Redirect to Landpage
            redirect('Landpage');
        } if ($admin) {
            redirect('Admin');
        } else {
            // Display error or redirect to login page with a message
            redirect('Mahasiswa');
        }
    }

    public function register() {
        $this->load->model('Mahasiswa_model');
        $nim = $this->input->post('nim', true);
			$username = $this->input->post('username', true);
			$password = md5($this->input->post('password', true));
            $data = [
                'nim' => $nim,
                'username' => $username,
                'password' => $password,
            ];
            $insert=$this->Mahasiswa_model->register_user($data);
            if($insert){
                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('Mahasiswa');
            }else{
                $this->session->set_flashdata('error', 'Registration failed. Please try again.');
                redirect('Mahasiswa');
            }
    }
}