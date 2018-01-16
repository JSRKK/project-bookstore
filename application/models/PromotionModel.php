<?php
class PromotionModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function get() {
            $query = $this->db->query("SELECT p.promotion_ID, p.proName, p.proDateStart, p.proDateStop, p.proDiscount, b.book_ID, b.bookName, b.bookPrice, b.bookImageCover 
                                        FROM promotion p INNER JOIN book b ON p.book_ID = b.book_ID
                                        WHERE p.proDateStop >= 2018-01-13"); 
            return $query->result_array(); 
        }
        public function get_score($book_id){
            $query = $this->db->query("SELECT (SUM(reviewScore)*5) / (COUNT(user_ID)*5) AS sum_score
                                            FROM review
                                            WHERE book_ID = '$book_id'");
            return  $query->result_array();
        }
}?>