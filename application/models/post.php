<?php

class Post extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getPosts($user_id) {

		$query = $this->db->where('user_id', $user_id)->order_by('post_date', 'desc')->get('posts');
		return $query;
	}
	
	function insertPost($user_id, $body) {
	
		$data = ['user_id' => $user_id, 'body' => $body, 'post_date' => date('Y-m-d H:i:s')];
		$this->db->insert('posts', $data);
	}

	function convert($body) {
		return preg_replace('/(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)/', '<A href="\\1\\2">\\1\\2</A>', $body);
	}
}

?>
