<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryPurchaseController extends CI_Controller {

	public function index()
	{
		$myDatas['books'] = $this->getHistoryPurchase();
		$this->load->view('history_purchase_view',$myDatas);
	}

	private function getHistoryPurchase(){
		$this->load->model('HistoryPurchaseModel');
		$datas = $this->HistoryPurchaseModel->getHistoryPurchase();
		return $datas;
	}
	

}