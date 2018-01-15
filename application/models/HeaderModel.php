<?php

class HeaderModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getBookType(){
                $session_data = $this->session->userdata('loged_in');
            $query = $this->db->query("SELECT * FROM type"); // session
            return $query->result_array();
        }

}