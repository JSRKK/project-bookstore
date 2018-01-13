<?php

class HistoryPurchaseModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getHistoryPurchase(){
                $session_data = $this->session->userdata('loged_in');
            $query = $this->db->query("SELECT bookName,purchasedDateTime,purchasedPrice 
                                        FROM book INNER JOIN purchased ON book.book_ID = purchased.book_ID
                                        WHERE purchased.user_ID='".$session_data['user_ID']."' ;"); // session
            return $query->result_array();
        }

}