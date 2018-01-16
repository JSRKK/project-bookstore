<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookTypeController extends CI_Controller {

	public function getByType($id)
	{
		$this->load->helper('url');
		$bookID = $this->uri->segment(3);

		$this->load->model('BookTypeModel');	
		$datas = $this->BookTypeModel->getByType($bookID);	
		$data = null;
		foreach ($datas as $row){
			$score = $this->BookTypeModel->get_score($row['book_ID']);
			$data[] = array(
			'book_id' => $row['book_ID'],
			'book_name' => $row['bookName'],					
			'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
			'book_img' => $row['bookImageCover'],
			'book_score' => ($score[0]['sum_score']/5)*100
		 	);	
        }
		
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);

		$dataShow['books'] = $data;
		$dataShow['title'] = $this->BookTypeModel->getBookType($bookID)[0]['typeName'];
		$this->load->view('book_type_view', $dataShow);
	}
}
