<?php

class BookModel extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	public function get(){
		$bookname = $this->input->post('name');
		
		if(empty($bookname)){
			return null;
		}

		$query = $this->db->query("SELECT book_ID, bookName, bookPrice, bookImageCover
									FROM book WHERE bookName LIKE '%$bookname%'");
		return $query->result_array();
	}
}