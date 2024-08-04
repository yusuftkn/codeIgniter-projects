<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Auth_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function register() {

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('auth/register');
		} else {

			$data = [
				'name' => $this->input->post('name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];

			$this->Auth_model->register($data);

			redirect('auth/login');
		}
	}

	public function login() {

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('auth/login');
		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->Auth_model->login($email, $password);

			if ($user) {

				$session_data = [
					'id' => $user['id'],
					'name' => $user['name'],
					'last_name' => $user['last_name'],
					'email' => $user['email'],
					'logged_in' => TRUE
				];
				$this->session->set_userdata($session_data);

				redirect('products');
			} else {

				$this->session->set_flashdata('error', 'Geçersiz e-posta veya şifre');
				redirect('auth/login');
			}
		}
	}

	public function logout() {
		$this->session->unset_userdata(['user_id', 'username', 'logged_in']);
		$this->session->set_flashdata('success', 'Başarıyla çıkış yaptınız');
		redirect('auth/login');
	}


}
