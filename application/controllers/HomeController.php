<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->model('HomeModel');	
		$datas = $this->HomeModel->get();	
		foreach ($datas as $key => $row){
			$score = $this->HomeModel->get_score($row['book_ID']);
			$discount = $this->HomeModel->get_discount($row['book_ID']);	

			if($discount != null){
				$tempTotal = $row['bookPrice'] - (($row['bookPrice'] * $discount[0]['proDiscount']) / 100);
				$tempDis = $discount[0]['proDiscount'];
			}
			else{
				$tempTotal = 0;	
				$tempDis = 0;
			}

			if($key < (int)(sizeof($datas)/2)){
				$data[] = array(
				'book_id' => $row['book_ID'],
				'book_name' => $row['bookName'],					
				'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
				'book_img' => $row['bookImageCover'],
				'book_score' => ($score[0]['sum_score']/5)*100,
				'book_discount' => $tempDis,
				'book_total' => sprintf('%0.2f',$tempTotal),
				'publisher_name' => $row['publisherName']
				);	
			}
			else{
				$data2[] = array(
					'book_id' => $row['book_ID'],
					'book_name' => $row['bookName'],					
					'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
					'book_img' => $row['bookImageCover'],
					'book_score' => ($score[0]['sum_score']/5)*100,
					'book_discount' => $tempDis,
					'book_total' => sprintf('%0.2f',$tempTotal),
					'publisher_name' => $row['publisherName']
					);	
			}
		}

		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);
		$dataShow['books1'] = $data;
		$dataShow['books2'] = $data2;
		$this->load->view('home_view', $dataShow);
		$this->load->view('footer_view');
	}

	public function logout()
	{
		$this->session->unset_userdata('loged_in', null);
		redirect('HomeController');
	}
}
