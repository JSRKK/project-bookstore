<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromotionController extends CI_Controller {

	public function index()
	{
		$this->load->view('promotion_view');
	}
}