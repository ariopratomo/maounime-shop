<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{

		if ($this->session->userdata('email')) {
			redirect('admin/home');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Admin - Login';
			$this->load->view('admin/auth/login');
		} else {
			$this->_login();
		}
	}
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['email' => $email])->row();

		if ($user) {
			// if admin active
			// if ($user['is_active'] == 1) {
			// check password
			if (password_verify($password, $user->password)) {
				$data = [
					'email' => $email,
					'role_id' => $user->role_id
				];
				$this->session->set_userdata($data);
				redirect('admin/home');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('admin/auth');
			}
			// } else {
			// 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated! </div>');
			// 	redirect('auth');
			// }
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('admin/auth');
		}
	}

	public function logout()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah logout!</div>');
		session_destroy();
		redirect('admin/auth');
	}
}

/* End of file Auth.php */