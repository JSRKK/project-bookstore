<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailController extends CI_Controller {

	public function index()
	{
		$this->load->view('book_detail_view');
	}
}
