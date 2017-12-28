<?php
class LibraryModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function get($userID) {
            $query = $this->db->query("SELECT p.book_ID, b.bookName, b.bookImageCover 
                                        FROM purchased p INNER JOIN book b on p.book_ID = b.book_ID 
                                        WHERE p.user_ID = '$userID'"); 
            return $query->result_array(); 
        }
}?>