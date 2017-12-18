<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Cagregar2 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('magregar');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu2');
		$this->load->view('vagregar');
		$this->load->view('layout/footer');
	}


	public function guardar(){
		//persona
		echo $nombre =$_FILES['fileImagen']['name'];

		$parama['nombre_evento'] = $this->input->post('txtNombreE');
		$parama['fecInicio'] = $this->input->post('datFecI');
		$parama['descripcion'] = $this->input->post('txtContenido');
		$parama['titImagen'] = $this->input->post('titImagen');
		$parama['fileImagen'] = $nombre;
		$this->magregar->guardar($parama);
		$foto=$_FILES["fileImagen"]["name"];
		$ruta=$_FILES["fileImagen"]["tmp_name"];
		$destino="fotos/".$foto;
		copy($ruta,$destino);
		$this->load->view('layout/header');
		$this->load->view('layout/menu2');
		$this->load->view('vagregar');
		$this->load->view('layout/footer');


	}
}