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
		
			$usernameDatas['user'] = $this->getTopUp();
			
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
		$serial = $_POST['serial'];
		$serial =  intval($serial); 
		$code = $serial%11;
		echo $code;
		if($code == 0 || $code == 2 || $code == 4 ||$code == 7 ||$code == 9 ||$code == 3){
			//echo "ทดสอบ";
			if($code == 0){
				$money = 50;
			}
			else if($code == 2){
				$money = 90;
			}
			else if($code == 3){
				$money = 150;
			}
			else if($code == 4){
				$money = 500;
			}
			else if($code == 7){
				$money = 1000;
			}
			else {
				$money = 300;
			}
			$this->TopUpModel->setTopUp($money,$userid);
		}
		else{
			echo "<script>
			alert('หมายเลขของท่านไม่ถูกต้อง');</script>";
			$usernameDatas['user'] = $this->getTopUp();
			$this->load->view('topup_view',$usernameDatas);
		}
		
	}
	private function getTopUp(){
			$this->load->model('TopUpModel');
			$datas = $this->TopUpModel->getTopUp();
			return $datas;
	}

}