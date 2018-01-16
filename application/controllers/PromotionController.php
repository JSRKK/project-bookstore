<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromotionController extends CI_Controller {

	public function index()
	{
		$this->load->model('PromotionModel');
		$datas = $this->PromotionModel->get();

		if(!empty($datas)){
			foreach ($datas as $row){
				$score = $this->PromotionModel->get_score($row['book_ID']);
				$data[] = array(
				'book_id' => $row['book_ID'],				
				'book_name' => $row['bookName'],
				'book_price' => sprintf('%0.2f',$row['bookPrice']),
				'book_img' => $row['bookImageCover'],
				'book_start' => date("d/m/Y", strtotime($row['proDateStart'])),
				'book_stop' => date("d/m/Y", strtotime($row['proDateStop'])),
				'book_discount' => $row['proDiscount'],
				'book_total' => sprintf('%0.2f',$row['bookPrice'] - (($row['bookPrice'] * $row['proDiscount']) / 100)),
				'book_score' => ($score[0]['sum_score']/5)*100
				);	
			}
			$dataShow['bookPromotion'] = $data;
		}
		else{
			$dataShow['bookPromotion'] = null;
		}	
		
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();

		$this->load->view('header_view', $datas);
		$this->load->view('promotion_view', $dataShow);
	}
}