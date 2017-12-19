<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryPurchaseController extends CI_Controller {

	public function index()
	{
		$this->load->view('history_purchase_view');
	}
}