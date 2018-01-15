<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryPurchaseController extends CI_Controller {

	public function index()
	{
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);

		$myDatas['books'] = $this->getHistoryPurchase();
		$this->load->view('history_purchase_view',$myDatas);
	}

	private function getHistoryPurchase(){
		$this->load->model('HistoryPurchaseModel');
		$datas = $this->HistoryPurchaseModel->getHistoryPurchase();
		return $datas;
	}
	

}