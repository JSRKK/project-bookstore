<?php

class TopUpModel extends CI_Model {
	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
	}
	public function getTopUp(){
		$query = $this->db->query("SELECT user_ID FROM user"); // session
		return $query->result_array();
	}

}
