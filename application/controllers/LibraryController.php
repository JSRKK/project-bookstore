<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryController extends CI_Controller {

	public function index()
	{
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];

		if(!empty($id)){
			$this->load->model('LibraryModel');	
			$datas = $this->LibraryModel->get($id);
			if(!empty($datas)){
				foreach ($datas as $row){
					$data[] = array(
					'book_id' => $row['book_ID'],				
					'book_name' => $row['bookName'],
					'book_img' => $row['bookImageCover'],
					);	
				}	
				$dataShow['books'] = $data;
			}
			else{
				$dataShow['books'] = null;
			}	
			$this->load->model('HeaderModel');
			$datas['bookTypes'] = $this->HeaderModel->getBookType();		
			$this->load->view('header_view',$datas);

			$this->load->view('library_view', $dataShow);
		}
		else{
			redirect('LoginController');
		}
		
	}
}
