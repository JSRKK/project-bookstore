<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TopUpController extends CI_Controller {

	public function index()
	{
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];

		if(!empty($id)){
			$this->load->model('HeaderModel');
			$datas['bookTypes'] = $this->HeaderModel->getBookType();
			$this->load->view('header_view',$datas);
		
			$usernameDatas['user'] = $id;
			$this->session->set_flashdata('error', 'empty');			
			$this->load->view('topup_view',$usernameDatas);
			$this->load->view('footer_view');
		}
		else{
			redirect('LoginController');
		}
	}
	public function setTopUp(){
		$session_data = $this->session->userdata('loged_in');
		$userid = $session_data['userid'];

		$this->load->model('TopUpModel');
		$serial = $this->input->post('serial');			
		if($serial != null){
			$money[] = array(50,90,150,300,500,1000);	
			$code = $serial%6;					
			$cash = $this->TopUpModel->setTopUp($money[0][$code], $userid, $serial);
			if($cash == null){
				$this->TopUpModel->update_session($money[0][$code]);				
				$this->session->set_flashdata('success', $money[0][$code]);	
				redirect('HistoryTopUpController');
			}
			else{	
				$this->session->set_flashdata('error','error');								 
				$this->load->view('header_view');					
				$this->load->view('topup_view');
				$this->load->view('footer_view');
						
			}			
		}
	}

}