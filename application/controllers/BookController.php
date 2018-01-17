<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookController extends CI_Controller {

	public function index()
	{
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		

		$this->load->model('BookModel');
		$datas = $this->BookModel->get();
		$data = null;
		foreach ($datas as $row){
			$score = $this->BookModel->get_score($row['book_ID']);
			$data[] = array(
			'book_id' => $row['book_ID'],
			'book_name' => $row['bookName'],					
			'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
			'book_img' => $row['bookImageCover'],
			'book_score' => ($score[0]['sum_score']/5)*100
		 	);	
		}
		
		$datashow['books'] = $data;

		$this->load->view('header_view',$datas);
		$this->load->view('Book_view',$datashow);
		$this->load->view('footer_view');		
	}
}