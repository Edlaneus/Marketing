<?php
/**
* 
*/
class fb3 extends CI_Controller
{

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu3');
		$this->load->view('view');
		$this->load->view('layout/footer');
		
	}



}