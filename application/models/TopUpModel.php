<?php

class TopUpModel extends CI_Model {
	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
	}
	public function setTopUp($money, $userid, $serial){
		//echo $user."    ".$money;
		$session_data = $this->session->userdata('loged_in');
		$query = $this->db->query("SELECT * FROM payment WHERE payment_ID = '$serial'");
		if($query->result() == null){	
			$date = date("Y-m-d H:i:s");
			$data = array(
				'payment_ID' => $serial,
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
			
			return $query->result();
		}
		
		return $query->result();
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
