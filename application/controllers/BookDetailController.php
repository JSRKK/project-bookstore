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
				$data[0]['limit'] = 100;
				$data[0]['count'] = $count;			
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
		$this->load->view('footer_view');		
	}

	public function buy(){
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];
		$book_id = $this->input->get('book_id');

		$this->load->model('BookDetailModel');
		$datas = $this->BookDetailModel->get_book($book_id);
		$book_price = $datas[0]['bookPrice'];
		$user_cash = $session_data['cash'];

		if(!empty($id)){
			if($user_cash >= $book_price){
				$this->load->model('BookDetailModel');
				$cash = $this->BookDetailModel->buy_book($id, $book_id, $book_price, $user_cash);
				$this->BookDetailModel->update_session($cash);
				redirect('LibraryController');
			}
			else{

			}
		}
		else{
			redirect("LoginController");
		}
	}
}
