<?php
class RegisterModel extends CI_Model {
	   
	   function __construct() {
                parent::__construct(); 
        }

        public function check_username($username){                   
            $query = $this->db->query("SELECT user_ID FROM reader WHERE user_ID ='$username'");
            return $query->result_array();
        }

        public function register_reader($username) {
            $password = $this->input->post('password');
            $fname = $this->input->post('first_name');
            $lname = $this->input->post('last_name');
            $gender = $this->input->post('gender');
            $birthday = $this->input->post('birthday');
            $tel = $this->input->post('tel');

            $data = array(
                'user_ID' => $username,
                'userPassword' => $password,
                'userType' => "R"
            );
            $this->db->insert('user', $data);

            $data2 = array(
                'user_ID' => $username,
                'ReaderFname' => $fname,
                'ReaderLname' => $lname,
                'ReaderGender' => $gender,
                'ReaderDateBirth' => date("Y-m-d", strtotime($birthday)),
                'ReaderTel' => $tel,
                'ReaderCash' => 0
            );
            $this->db->insert('reader', $data2);

            return true;          
        }
}?>