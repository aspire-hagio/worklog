<?php

class User extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function findUser($user_name, $password) {

		$query = $this->db->where('user_name', $user_name)->where('password', $password)->get('users');
		if ($query->num_rows() > 0) {
			return $query->first_row();
		} else {
			return null;
		}
		return $query[0];
	}
}

?>
