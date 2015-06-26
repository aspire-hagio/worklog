<?php

class Board extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->library('session');
	}
	
	public function index() {
//		$data = ['user_id' => $this->session->userdata('user_id')];
	
		$user_id = $this->session->userdata('user_id');
		$this->load->model('Post');
		$posts = $this->Post->getPosts($user_id);
		
		$data = ['posts' => $posts];
		
		$this->load->view('board_view', $data);
	}
	
	public function category($category_id = null) {
		$this->load->view('board_view');
	}
	
	public function post() {
		$this->load->model('Post');
		$user_id = $this->session->userdata('user_id');
		$body = $this->input->post('body');
		
		$this->Post->insertPost($user_id, $body);
	
		$this->load->helper('url');
		redirect('board');
	}
}

?>
