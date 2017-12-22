<?php
class LoginModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }

        public function get_data(){
            $id = $this->input->post('username');
            $password = $this->input->post('password');

            $this->db->select('*');
            $this->db->from('user');
            $where = "user_ID = '$id' AND userPassword = '$password'";
            $this->db->where($where);
            $query = $this->db->get();
            return $query->result_array();
        }

}