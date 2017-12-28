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
}?>