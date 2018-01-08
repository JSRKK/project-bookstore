<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->model('HomeModel');	
		$datas = $this->HomeModel->get();	
		foreach ($datas as $row){
			$data[] = array(
			'book_id' => $row['book_ID'],
			'book_name' => $row['bookName'],					
			'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
			'book_img' => $row['bookImageCover']
		 	);	
		}

		$dataShow['books'] = $data;
		$this->load->view('home_view', $dataShow);
	}
	
	public function logout()
	{
		$this->session->unset_userdata('loged_in', null);
		redirect('HomeController');
	}
}
