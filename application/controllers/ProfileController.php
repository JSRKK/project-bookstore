<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

	public function index()
	{
		$session_data = $this->session->userdata('loged_in');
		$id = $session_data['userid'];
		if(!empty($id)){
			
		
			$this->load->model('ProfileModel');
			$datas = $this->ProfileModel->get();
			$dataShow['profile'] = $datas;
			
			$this->load->model('HeaderModel');
			$datas['bookTypes'] = $this->HeaderModel->getBookType();
		
			$this->load->view('header_view', $datas);
			$this->load->view('profile_reader_view', $dataShow);
			$this->load->view('footer_view');			
		}
		else{
			redirect('LoginController');
		}
	}
}