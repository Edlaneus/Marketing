<?php
/**
* 
*/
class Ccalendar3 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcalendar');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu3');
		$this->load->view('persona/vcalendar3');//MODIFICAR PARA USUARIO TIPO 2
		$this->load->view('layout/footer');
	}

	public function getEventos(){
		$r = $this->Mcalendar->getEventos();
		//$r = $this->db->get('eventos');
		echo json_encode($r);
	}
	public function updEvento(){
		$param['id'] = $this->input->post('id');
		$param['fecini'] = $this->input->post('fecini');

		$r = $this->Mcalendar->updEvento($param);

		echo $r;
	}
	public function deleteEvento(){
		$id = $this->input->post('id');
		$r = $this->Mcalendar->deleteEvento($id);
		echo $r;
	}



	/*public function getEventos(){
		$r = $this->Mcalendar->getEventos();
		echo json_encode($r);
	}
*/
	/*public function updEvento(){
		$param['id'] = $this->input->post('id');
		$param['fecini'] = $this->input->post('fecini');
		$param['fecfin'] = $this->input->post('fecfin');

		$r = $this->Mcalendar->updEvento($param);

		echo $r;
	}

	public function deleteEvento(){
		$id = $this->input->post('id');
		$r = $this->Mcalendar->deleteEvento($id);
		echo $r;
	}*/

	public function updEvento2(){
		$param['id'] = $this->input->post('id');
		$param['nome'] = $this->input->post('nom');
		$param['web'] = $this->input->post('web');

		$r = $this->Mcalendar->updEvento2($param);

		echo $r;
	
}
}