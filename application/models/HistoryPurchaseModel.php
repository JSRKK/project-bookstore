<?php

class HistoryPurchaseModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getHistoryPurchase(){
                $session_data = $this->session->userdata('loged_in');
            $query = $this->db->query("SELECT b.book_ID, b.bookName, p.purchasedDateTime, p.purchasedPrice 
                                        FROM book b INNER JOIN purchased p ON b.book_ID = p.book_ID
                                        WHERE p.user_ID='".$session_data['userid']."' ;"); // session
            return $query->result_array();
        }

}