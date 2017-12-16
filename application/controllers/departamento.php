<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento extends CI_Controller {

	public function __construct(){
        parent::__construct();

        $this->load->model('departamento_model');

		date_default_timezone_set("America/Mexico_City");

		if(!$this->access->check()){
			redirect('login');
		}
	}
	public function index()
	{
		

	}
	

	public function getPromociones(){

		$s = $this->input->post('sitReg');


		$resul = $this->departamento_model->getDepatamento($s);
		echo json_encode($resul);
	}	



}

