<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailController extends CI_Controller {

	public function index()
	{
		$this->load->model('BookDetailModel');
		
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];
		
		$datas = $this->BookDetailModel->get_book();
		if(!empty($datas)){
			foreach ($datas as $row){
				$data[] = array(
				'book_id' => $row['book_ID'],
				'book_name' => $row['bookName'],					
				'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
				'book_detail' => $row['bookDetail'],
				'book_img' => $row['bookImageCover'],
				'book_date' => $row['bookDateImp']
				);	
			}

			$dataShow['books'] = $data;
		}
		else{
			$dataShow['books'] = null;
		}
		var_dump($id);
		if(!empty($id)){
			$dataShow['book_check'] = $this->BookDetailModel->check_book($id,$data[0]['book_id']);
		}
		else{
			$dataShow['book_check'] = null;
		}
		
		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);
		
		$this->load->view('book_detail_view', $dataShow);
	}
}
