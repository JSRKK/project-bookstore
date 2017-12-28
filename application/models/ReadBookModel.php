<?php
class ReadBookModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function get($bookId) {
            $query = $this->db->query("SELECT page_ID, pageImage, book_ID
                                        FROM page 
                                        WHERE book_ID = '$bookId'"); 
            return $query->result_array(); 
        }
}?>