<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TopUpController extends CI_Controller {

	public function index()
	{
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);
		
		$usernameDatas['user'] = $this->getTopUp();
		$this->load->view('topup_view',$usernameDatas);
	}
	
	private function getTopUp(){
			$this->load->model('TopUpModel');
			$datas = $this->TopUpModel->getTopUp();
			return $datas;
	}

}