<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryPurchaseController extends CI_Controller {

	public function index()
	{
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];
		if(!empty($id)){
			$this->load->model('HeaderModel');
			$datas['bookTypes'] = $this->HeaderModel->getBookType();
			$this->load->view('header_view',$datas);

			$myDatas['books'] = $this->getHistoryPurchase();
			$this->load->view('history_purchase_view',$myDatas);
			$this->load->view('footer_view');
		}
		else{
			redirect('LoginController');
		}
	}

	private function getHistoryPurchase(){
		$this->load->model('HistoryPurchaseModel');
		$datas = $this->HistoryPurchaseModel->getHistoryPurchase();
		return $datas;
	}
	

}