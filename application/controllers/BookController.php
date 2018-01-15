<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookController extends CI_Controller {

	public function index()
	{
		$this->load->model('BookModel');
		$datas = $this->BookModel->get();
		$datashow['books'] = $datas;
		$this->load->view('book_view',$datashow);
	}
}