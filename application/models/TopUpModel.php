<?php

class TopUpModel extends CI_Model {
	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
	}
	public function getTopUp(){
		$query = $this->db->query("SELECT user_ID FROM user"); // session
		return $query->result_array();
	}
	public function setTopUp($money,$userid){
		//echo $user."    ".$money;
		$session_data = $this->session->userdata('loged_in');
		$query = $this->db->query("SELECT MAX(payment_ID) AS payment_ID FROM payment");
		if($query->result() != null){
			foreach ($query->result() as $row)
			{
				$latest = $row->payment_ID +1;
			}
		}
		else $latest = 1;
		$date = date("Y-m-d H:i:s");
		$data = array(
			'payment_ID' => $latest,
			'paymentDateTime' => $date,
			'paymentPrice' => $money,
			'user_ID' => $userid
		);
		$this->db->insert('payment',$data);
		$tempCash = $session_data['cash']+ $money;
		$data = array(
			'ReaderCash' => $tempCash,
		);
		$this->db->where('user_ID', $userid);
		$this->db->update('reader', $data);
		return $money;
		
	}
	
	public function update_session($cash){
		$session_data = $this->session->userdata('loged_in');
		$sess_array = array(
			'userid' => $session_data['userid'],
			'fName' => $session_data['fName'],
			'lName' => $session_data['lName'],
			'cash' => $session_data['cash']+$cash
		);
		$this->session->set_userdata('loged_in',$sess_array);
	}

}
