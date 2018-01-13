<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BooksController extends CI_Controller {

	public function index()
	{
		$this->load->model('BooksModel');
		$datas = $this->BooksModel->get();

		$datashow['books'] = $datas;
		$this->load->view('book_view',$datashow);
	}
}