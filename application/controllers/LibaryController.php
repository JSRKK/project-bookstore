<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibaryController extends CI_Controller {

	public function index()
	{
		$this->load->view('libary_view');
	}
}
