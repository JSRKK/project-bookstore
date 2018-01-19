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
		$data2 = null;
		$index = 0;
		foreach ($datas as $key => $row){
			$score = $this->BookTypeModel->get_score($row['book_ID']);
			$discount = $this->BookTypeModel->get_discount($row['book_ID']);	

			if($discount != null){
				$tempTotal = $row['bookPrice'] - (($row['bookPrice'] * $discount[0]['proDiscount']) / 100);
				$tempDis = $discount[0]['proDiscount'];
			}
			else{	
				$tempTotal = 0;
				$tempDis = 0;
			}

			$data[] = array(
				'book_id' => $row['book_ID'],
				'book_name' => $row['bookName'],					
				'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
				'book_total' => sprintf('%0.2f',$tempDis),
				'book_discount' => $tempDis,
				'book_img' => $row['bookImageCover'],
				'book_score' => ($score[0]['sum_score']/5)*100,
				'publisher_name' => $row['publisherName']
			 );	

			if(($key+1) % 4 == 0){
				$data2[$index] = array( $data );
				$data = null;
				$index++;
			} 			 
		}
		if(sizeof($datas)%4 != 0){
			$data2[$index] = array( $data );
		}
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);

		$dataShow['books'] = $data2;
		$dataShow['title'] = $this->BookTypeModel->getBookType($bookID)[0]['typeName'];
		$this->load->view('book_type_view', $dataShow);
		$this->load->view('footer_view');
	}
}
