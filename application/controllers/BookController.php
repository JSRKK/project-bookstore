<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookController extends CI_Controller {

	public function index()
	{
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		

		$this->load->model('BookModel');
		$datas = $this->BookModel->get();
		$datashow['books'] = $datas;

		$this->load->view('header_view',$datas);
		$this->load->view('Book_view',$datashow);
	}
}