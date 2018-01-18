<?php
class HomeModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function get() {
                $query = $this->db->query("SELECT b.book_ID, b.bookName, b.bookPrice, b.bookImageCover, p.publisherName 
                                           FROM book b NATURAL JOIN publisher p");
                return $query->result_array(); 
        }

        public function get_score($book_id){
		$query = $this->db->query("SELECT (SUM(reviewScore)*5) / (COUNT(user_ID)*5) AS sum_score
                                        FROM review
                                        WHERE book_ID = '$book_id'");
		return  $query->result_array();
        }
        
        public function get_discount($book_id){
                $query = $this->db->query("SELECT proDiscount 
                                        FROM promotion
                                        WHERE book_ID = '$book_id'");
		return  $query->result_array();
        }
}?>