<?php

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->library('session');
	}

	public function index() {
		$this->load->view('login_view');
	}
	
	public function go() {
		$user_name = $this->input->post('user_name');
		$password = $this->input->post('password');

		$this->load->model('User');

		$user = $this->User->findUser($user_name, $password);

//		$this->session->set_userdata(['user_id' => $user['user_id']]);
		$this->session->set_userdata(['user_id' => $user->user_id]);

		print_r($this->input->post());
		$this->load->helper('url');
		if ($user) {
			redirect('board');
		} else {
			redirect('login');
		}
	}
}

?>
