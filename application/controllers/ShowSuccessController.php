<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowSuccessController extends CI_Controller {

	public function index()
	{	
		$this->load->view('show_success_view');
	}
}
