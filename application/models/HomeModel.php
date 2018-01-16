<?php
class HomeModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function get() {
                $this->db->select('book_ID, bookName, bookPrice, bookImageCover'); 
                $this->db->from('book'); 
                $query = $this->db->get(); 
                return $query->result_array(); 
        }

        public function get_score($book_id){
		$query = $this->db->query("SELECT (SUM(reviewScore)*5) / (COUNT(user_ID)*5) AS sum_score
                                        FROM review
                                        WHERE book_ID = '$book_id'");
		return  $query->result_array();
	}
}?>