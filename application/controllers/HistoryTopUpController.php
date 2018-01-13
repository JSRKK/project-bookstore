<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryTopUpController extends CI_Controller {

	public function index()
	{
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];

		if(!empty($id)){
			$this->load->model('HistoryTopUpModel');				
			$datas = $this->HistoryTopUpModel->get($id);
			if(!empty($datas)){
				foreach ($datas as $key => $row){
					$data[] = array(
					'number' => $key+1,
					'pay_id' => $row['payment_ID'],				
					'pay_date' => $row['paymentDateTime'],
					'pay_price' => $row['paymentPrice'],
					);	
				}	
				$dataShow['payment'] = $data;
			}
			else{
				$dataShow['payment'] = null;
			}
			$this->load->view('history_topup_view', $dataShow);
		}
		else{
			redirect('LoginController');
		}
	}
}