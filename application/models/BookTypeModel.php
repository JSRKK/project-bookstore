<?php
class BookTypeModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function getByType($id) {
                $this->db->select('book_ID, bookName, bookPrice, bookImageCover'); 
                $this->db->from('book'); 
                $this->db->where('type_ID', $id);
                $query = $this->db->get(); 
                return $query->result_array(); 
        }
        public function getBookType($id) {
                $this->db->select('*'); 
                $this->db->from('type'); 
                $this->db->where('type_ID', $id);
                $query = $this->db->get(); 
                return $query->result_array(); 
        }
}?>