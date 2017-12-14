<?php
/**
* 
*/
class publicar extends CI_Controller
{

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('post');
		$this->load->view('layout/footer');
		
	}



}