<?php
class ChangePasswordModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function check_password($old_password) {
                $query = $this->db->query("SELECT userPassword 
                                             FROM user
                                             WHERE userPassword = '$old_password'");                                       
                 return $query->result_array(); 
        }

        public function update_password($userid, $password) {
                $data = array(
                        'userPassword' => $password
                );    
                $this->db->where('user_ID', $userid);
                $this->db->update('user', $data);			                                 
        }

}?>