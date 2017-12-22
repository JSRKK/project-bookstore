<?php
class LoginModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }

        public function get_data(){
            $id = $this->input->post('username');
            $password = $this->input->post('password');

            $this->db->select('userType');
            $this->db->from('user');
            $where = "user_ID = '$id' AND userPassword = '$password'";
            
            $this->db->where($where);
            $query = $this->db->get();
            $query =  $query->result_array();

            if(count($query) > 0){
               if($query[0]['userType'] == 'R')
               {
                   $data = $this->db->query("SELECT * FROM reader
                                                WHERE user_ID = '$id';");
                    $data = $data->result_array();
                    $data[0]['ReaderCash'] =  1000;
                    return $data;
               }
               else if($query[0]['userType'] == 'P')
               {
                   $query = $this->db->query("SELECT * FROM publisher
                                                WHERE  user_ID = '$id';");
                  
                    $query = $query ->result_array();
                    $query[0]['ReaderFname'] =  $query[0]['publisherName'];
                    $query[0]['ReaaderLname'] =  $query[0]['publisherAutherName'];
                    $query[0]['ReaderCash'] =  null;
                return $query;
               }
                
            }
            else {

                return $query;
            }
        }

}