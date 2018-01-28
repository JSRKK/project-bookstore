<?php

class HistoryTopUpModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function get($userID){
            $query = $this->db->query("SELECT payment_ID, paymentDateTime, paymentPrice 
                                        FROM payment 
                                        WHERE user_ID='$userID'  ORDER BY paymentDateTime DESC"); // session
            return $query->result_array();
        }

}