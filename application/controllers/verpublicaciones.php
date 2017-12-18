<?php
/**
* 
*/
class Verpublicaciones extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		            $this->load->model('publicaciones_model');

	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('publicaciones/vpublicaciones');
		$this->load->view('layout/footer');

	}

	public function pub(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('publicaciones/vpublicaciones');
		$this->load->view('layout/footer');

	}
	public function listapublicaciones(){
        	$datos['publicacion'] = $this->publicaciones_model->getpublicaciones();
            $this->load->view('layout/header');
            $this->load->view('layout/menu');
            $this->load->view('publicaciones/vpublicaciones',$datos); 
            $this->load->view('layout/footer');  
    }   
	public function editpublicacion($id){
        	$datos['publicacion'] = $this->publicaciones_model->getpublicacion($id);
            $this->load->view('layout/header');
            $this->load->view('layout/menu');
            $this->load->view('publicaciones/editar',$datos); 
            $this->load->view('layout/footer');  
    }   


	public function getEventos(){
		$r = $this->Mcalendar->getEventos();
		//$r = $this->db->get('eventos');
		echo json_encode($r);
	}
	function actualizar(){
            $id = $this->input->post("idPersona"); 
            $datos['nombre_evento']=$this->input->post("nom");
            $datos['descripcion']=$this->input->post("appaterno");
            $datos['fecInicio']=$this->input->post("email");
            $datos['status']=$this->input->post("fecnac");

            $this->publicaciones_model->actualizar($datos,$id);       
            $this->listapublicaciones();
    }
	
}