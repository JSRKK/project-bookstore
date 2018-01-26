<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function index()
	{	
		$this->load->view('register_view');
	}

	public function register(){
		$this->load->model('RegisterModel');
		$username = $this->input->post('username');
		if(empty($username)){
			$this->load->view('register_view');
		}
		$check = $this->RegisterModel->check_username($username);

		if($check == null){
			$data = $this->RegisterModel->register_reader($username);
			if($data == true){
				$this->session->set_flashdata('type','register');
				redirect('ShowSuccessController');
			}			
		}
		else{
			$this->session->set_flashdata('error','username นี้ถูกใช้งานแล้ว');
			$this->load->view('register_view');
		}
	}
}
