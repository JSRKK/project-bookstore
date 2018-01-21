<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TopUpController extends CI_Controller {

	public function index()
	{
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];

		if(!empty($id)){
			$this->load->model('HeaderModel');
			$datas['bookTypes'] = $this->HeaderModel->getBookType();
			$this->load->view('header_view',$datas);
		
			$usernameDatas['user'] = $id;
			
			$this->load->view('topup_view',$usernameDatas);
			$this->load->view('footer_view');
		}
		else{
			redirect('LoginController');
		}
	}
	public function setTopUp(){
		$session_data = $this->session->userdata('loged_in');
		$userid = $session_data['userid'];

		$this->load->model('TopUpModel');
		$serial = $this->input->post('serial');			
		if($serial != null){
			$money[] = array(50,90,150,300,500,1000);	
			$code = $serial%6;
			print_r($code);					
			$cash = $this->TopUpModel->setTopUp($money[$code], $userid, $serial);
			if($cash == null){
				$this->TopUpModel->update_session($money[$code]);
				echo "<script>
				alert('ท่านได้เติมเงินเรียบร้อยแล้ว');</script>";
				redirect('HistoryTopUpController');
			}			
		}
		else{
			echo "<script>
			alert('หมายเลขของท่านไม่ถูกต้อง');</script>";
			redirect('TopUpController');
		}
	}

}