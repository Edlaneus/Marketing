<?php
/**
* 
*/
class fb2 extends CI_Controller
{

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu2');
		$this->load->view('view');
		$this->load->view('layout/footer');
		
	}



}