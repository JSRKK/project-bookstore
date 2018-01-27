<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailController extends CI_Controller {
	private $book_id="";

	public function index()
	{
		$this->load->model('BookDetailModel');
		
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];
		if($this->book_id == ""){
			$this->session->set_flashdata('buy', 'false');	
			$this->book_id = $this->input->get('book_id');
		}
		$datas = $this->BookDetailModel->get_book($this->book_id);
		$pageBook = $this->BookDetailModel->get_page($this->book_id);
		$discount = $this->BookDetailModel->get_discount($this->book_id);	
	
		if(!empty($datas)){
			foreach ($datas as $row){
				if($discount != null){
					$tempTotal = $row['bookPrice'] - (($row['bookPrice'] * $discount[0]['proDiscount']) / 100);
					$tempDis = $discount[0]['proDiscount'];
					$tempStart = date("d/m/Y", strtotime($discount[0]['proDateStart']));
					$tempStop = date("d/m/Y", strtotime($discount[0]['proDateStop']));
				}
				else{
					$tempTotal = 0;	
					$tempDis = 0;
					$tempStart = null;
					$tempStop = null;
				}				
				$data[] = array(
				'book_id' => $row['book_ID'],
				'book_name' => $row['bookName'],					
				'book_price' => sprintf('%0.2f',$row['bookPrice']),		//กำหนดทศนิยม 2 ตำแหน่ง		
				'book_detail' => $row['bookDetail'],
				'book_img' => $row['bookImageCover'],
				'book_date' => date("d/m/Y", strtotime($row['bookDateImp'])),
				'book_page' => $pageBook[0]['pagesBook'],
				'book_discount' => $tempDis,
				'book_total' => sprintf('%0.2f',$tempTotal),
				'book_dateStart' => $tempStart,
				'book_dateStop' => $tempStop,
				'publisher_name'  => $row['publisherName']
				);	
			}

			$scores = $this->BookDetailModel->get_score($this->book_id);
			$count = 0;
			$tempScore = 0;
			$userComment = false;

			if(!empty($scores)){
				foreach($scores as $row){
					if($row['user_ID'] === $id)
						$userComment = true;

					$tempScore += $row['reviewScore'];
					$count++;
				}
				$tempScore = ($tempScore*5) / ($count*5);
				$data[0]['score'] = sprintf('%0.1f',$tempScore);
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
			$dataShow['book_check'] = $this->BookDetailModel->check_book($id, $this->book_id);
			$this->session->set_flashdata('cash', $session_data['cash']);
		}
		else{
			$dataShow['book_check'] = null;
			$this->session->set_flashdata('cash', 0);
		}
		
		$dataShow['user_comment'] = $userComment;

		$this->load->model('HeaderModel');
		$datas['bookTypes'] = $this->HeaderModel->getBookType();
		$this->load->view('header_view',$datas);
		$this->load->view('book_detail_view', $dataShow);
		$this->load->view('footer_view');		
	}

	public function buy(){
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];	
		$user_cash = $session_data['cash'];
		if(!empty($id)){
			$this->book_id = $this->input->post('book_id');
			$book_price = $this->input->post('book_price');
			if($user_cash >= $book_price){
				$this->load->model('BookDetailModel');
				$cash = $this->BookDetailModel->buy_book($id, $this->book_id, $book_price, $user_cash);
				$this->BookDetailModel->update_session($cash);
				$this->session->set_flashdata('buy', 'true');
				$this->index();
			}			
		}
		else{
			redirect("LoginController");
		}
	}

	public function comment(){
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];
		$this->book_id =  $this->input->post('book-id');
		$this->load->model('BookDetailModel');
		print_r($id, $this->book_id);
		$this->BookDetailModel->insert_comment($id, $this->book_id);
		$this->index();
	}
}
