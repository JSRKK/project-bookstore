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

	public function get_book($book_id)
	{
		$query = $this->db->query("SELECT book_ID, bookName, bookPrice, bookDetail, bookImageCover, bookDateImp
									FROM book
									WHERE book_ID = '$book_id'");
			
		return  $query->result_array();	
	}

	public function check_book($user_id, $book_id)
	{
		$query = $this->db->query("SELECT book_ID, user_ID
									FROM purchased
									WHERE user_ID = '$user_id' AND book_ID = '$book_id'");
		return  $query->result_array();
	}
	
	public function get_score($book_id){
		$query = $this->db->query("SELECT r.reviewScore, r.reviewComment, r.reviewDateTime, r.user_ID, u.ReaderFname, u.ReaderLname
									FROM review r INNER JOIN reader u ON r.user_ID = u.user_ID
									WHERE r.book_ID = '$book_id'");
		return  $query->result_array();
	}
}

