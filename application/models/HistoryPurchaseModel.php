<?php

class HistoryPurchaseModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getHistoryPurchase(){
            $query = $this->db->query("SELECT bookName,purchasedDateTime,purchasedPrice 
                                        FROM book INNER JOIN purchased ON book.book_ID = purchased.book_ID
                                        WHERE purchased.user_ID='58160300' ;"); // session
            return $query->result_array();
        }

}