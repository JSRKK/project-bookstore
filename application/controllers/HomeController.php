<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->model('HomeModel');	
		$datas = $this->HomeModel->get();	
		foreach ($datas as $row){
			$score = $this->HomeModel->get_score($row['book_ID']);
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
		$this->load->view('home_view', $dataShow);
		$this->load->view('footer_view');
	}

	public function logout()
	{
		$this->session->unset_userdata('loged_in', null);
		redirect('HomeController');
	}
}
