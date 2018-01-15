<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReadBookController extends CI_Controller {

	public function index()
	{
		$bookId = $this->input->get('book_id');
		$this->load->model('ReadBookModel');	
		$datas = $this->ReadBookModel->get($bookId);
		$dataShow['pages'] = $datas;
		$this->load->view('read_book_view', $dataShow);
	}
}