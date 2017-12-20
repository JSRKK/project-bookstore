<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TopUpController extends CI_Controller {

	public function index()
	{
		$this->load->view('topup_view');
	}
}