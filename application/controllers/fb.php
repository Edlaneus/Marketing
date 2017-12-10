<?php
/**
* 
*/
class fb extends CI_Controller
{

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('view');
		$this->load->view('layout/footer');
		
	}



}