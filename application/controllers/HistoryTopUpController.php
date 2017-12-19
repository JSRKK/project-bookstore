<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryTopUpController extends CI_Controller {

	public function index()
	{
		$this->load->view('history_topup_view');
	}
}