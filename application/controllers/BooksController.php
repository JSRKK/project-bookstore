<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BooksController extends CI_Controller {

	public function index()
	{
		$this->load->model('BooksModel');
		$datas = $this->BooksModel->get();

		$datashow['data'] = $datas;
		$this->load->view('Books_view',$datashow);
	}
}