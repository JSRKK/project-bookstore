<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailModel extends CI_Model {

	public function index()
	{
		$books = array();
		$this->db->select('book_ID, bookName');
	

		$query = $this->db->get('book');

		if ($query->num_rows() > 0)
		{
			foreach($query->result() as $row) 
			{
				$books[$row->id] = $row->name;
			}
		}
		return $books;
    }
    
}

