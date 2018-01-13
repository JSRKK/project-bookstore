<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryController extends CI_Controller {

	public function index()
	{
		$this->load->model('LibraryModel');	
		$datas = $this->LibraryModel->get('test1');
		foreach ($datas as $row){
			$data[] = array(
			'book_id' => $row['book_ID'],				
			'book_name' => $row['bookName'],
			'book_img' => $row['bookImageCover'],
		 	);	
		}

		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);

		$dataShow['books'] = $data;
		$this->load->view('library_view', $dataShow);
	}
}
