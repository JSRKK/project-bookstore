<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromotionController extends CI_Controller {

	public function index()
	{
		$this->load->model('PromotionModel');
		$datas = $this->PromotionModel->get();
		$data2 = null;
		$index = 0;
		if(!empty($datas)){
			foreach ($datas as $key => $row){
				$score = $this->PromotionModel->get_score($row['book_ID']);
				$data[] = array(
				'book_id' => $row['book_ID'],				
				'book_price' => sprintf('%0.2f',$row['bookPrice']),
				'book_name' => $row['bookName'],
				'book_img' => $row['bookImageCover'],
				'book_start' => date("d/m/Y", strtotime($row['proDateStart'])),
				'book_stop' => date("d/m/Y", strtotime($row['proDateStop'])),
				'book_discount' => $row['proDiscount'],
				'book_total' => sprintf('%0.2f',$row['bookPrice'] - (($row['bookPrice'] * $row['proDiscount']) / 100)),
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
			$dataShow['books'] = $data2;
		}
		else{
			$dataShow['books'] = null;
		}	
		
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();

		$this->load->view('header_view', $datas);		
		$this->load->view('promotion_view', $dataShow);
		$this->load->view('footer_view');
		
	}
}