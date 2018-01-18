<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookController extends CI_Controller {

	public function index()
	{
		$this->load->model('BookModel');
		$datas = $this->BookModel->get();
		$data = null;
		$data2 = null;
		$index = 0;
		foreach ($datas as $key => $row){
			$score = $this->BookModel->get_score($row['book_ID']);
			$discount = $this->BookModel->get_discount($row['book_ID']);	

			if($discount != null)
				$tempDis = $row['bookPrice'] - (($row['bookPrice'] * $discount[0]['proDiscount']) / 100);
			else			
				$tempDis = 0;

			$data[] = array(
			'book_id' => $row['book_ID'],
			'book_name' => $row['bookName'],					
			'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
			'book_discount' => sprintf('%0.2f',$tempDis),
			'book_img' => $row['bookImageCover'],
			'book_score' => ($score[0]['sum_score']/5)*100,
			'publisher_name' => $row['publisherName']
			 );	
			 
			 if(($key+1)%4 == 0){
				$data2[$index] = array( $data );
				$data = null;
				$index++;
			 }
		}
		
		$datashow['books'] = $data2;

		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);
		$this->load->view('Book_view',$datashow);
		$this->load->view('footer_view');		
	}
}