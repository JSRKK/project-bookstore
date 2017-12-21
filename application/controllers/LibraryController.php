<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryController extends CI_Controller {

	public function index()
	{
		$this->load->model('LibraryModel');	
		$datas = $this->LibraryModel->get('admin');
		foreach ($datas as $row){
			$data[] = array(
			'book_id' => $row['book_ID'],				
			'book_name' => $row['bookName']
		 	);	
		}

		$dataShow['books'] = $data;
		$this->load->view('library_view', $dataShow);
	}
}
