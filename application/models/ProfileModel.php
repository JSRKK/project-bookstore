<?php
class ProfileModel extends CI_Model {
    function __construct() {
        parent ::__construct();
    }

    public function get($user_id) {
        $this->db->select('user_ID, ReaderFname, ReaderLname, ReaderGender, ReaderDateBirth, ReaderTel');
        $this->db->where('user_ID', $user_id);
        $this->db->from('reader');
        $query = $this->db->get();
        return $query->result_array();
    }
}?>