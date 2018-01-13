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
	public function setTopUp($money,$user){
		//echo $user."    ".$money;
		$query = $this->db->query("SELECT payment_ID FROM payment");
		foreach ($query->result() as $row)
		{
				$latest = $row->payment_ID +1;
		}

		$date = date("Y-m-d H:i:s");
		$data = array(
			'payment_ID' => $latest,
			'paymentDateTime' => $date,
			'paymentPrice' => $money,
			'user_ID' => $user
		);
		$this->db->insert('payment',$data);
		echo "<script>
		alert('ท่านได้เติมเงินเรียบร้อยแล้ว');</script>";
		$usernameDatas['user'] = $this->getTopUp();
		$this->load->view('topup_view',$usernameDatas);
		
	}

}
