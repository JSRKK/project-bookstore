<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailController extends CI_Controller {

	public function index()
	{
		$this->load->model('BookDetailModel');
		
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];
		$book_id = $this->input->get('book_id');

		$datas = $this->BookDetailModel->get_book($book_id);
		if(!empty($datas)){
			foreach ($datas as $row){
				$data[] = array(
				'book_id' => $row['book_ID'],
				'book_name' => $row['bookName'],					
				'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
				'book_detail' => $row['bookDetail'],
				'book_img' => $row['bookImageCover'],
				'book_date' => date("d M Y", strtotime($row['bookDateImp']))
				);	
			}
			
			$scores = $this->BookDetailModel->get_score($book_id);
			$count = 0;
			$tempScore = 0;
			if(!empty($scores)){
				foreach($scores as $row){
					$tempScore += $row['reviewScore'];
					$count++;
				}
				$tempScore = ($tempScore*5) / ($count*5);
				$data[0]['score'] = sprintf('%0.1f',$tempScore);			
			}
			else{
				$data[0]['score'] = 0;
			}
			
			$dataShow['users'] = $scores;
			$dataShow['books'] = $data;
		}
		else{
			$dataShow['users'] = null;
			$dataShow['books'] = null;
		}
		
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
