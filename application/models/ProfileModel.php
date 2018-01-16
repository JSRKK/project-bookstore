<?php
class ProfileModel extends CI_Model {
    function __construct() {
        parent ::__construct();
    }

    public function get() {
        $this->db->select('user_ID, ReaderFname, ReaderLname, ReaderGender, ReaderDateBirth, ReaderTel');
        $this->db->from('reader');
        $query = $this->db->get();
        return $query->result_array();
    }
}?>