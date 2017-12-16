<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class registro extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('muser');
		$this->load->model('mpersona');
		$this->load->model('musuario');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('registrar');
		$this->load->view('layout/footer');
		
	}

	function newusuario(){

		$param['nombre'] = $this->input->post('name');
		$param['appaterno'] = $this->input->post('app');
		$param['email'] = $this->input->post('email');
		$param['tipo_usuario'] = $this->input->post('usuario');
		//$param['fecnac'] = $this->input->post('fRegistro');
		
		//Capturamos datos del usuario
		$paramUsu['nomUsuario'] = $this->input->post('userName');
		$paramUsu['clave'] = $this->encrypt->sha1($this->input->post('password'));
		//llamamos el modelo con su funcion guardar para guardar los datos
		$lastId = $this->mpersona->guardar($param);

		if ($lastId > 0){
			$paramUsu['idPersona'] = $lastId;
			$this->musuario->guardarUsuario($paramUsu);
		}
				redirect('verusr/listauser');


		/*$this->form_validation->set_rules('userName', 'nomUsuario', 'required');
		$this->form_validation->set_rules('password', 'Clave', 'trim|required|matches[confclave]');		

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('registrar');
			$this->load->view('assets/footer'); 
        } else {
          
			$datos['nomUsuario']=$this->input->post("userName");
			$cve = $this->input->post('password');

	        // Generacion de salt aleatoreo, de 22 caracteres para Bcrypt
	        $salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);

	        // Se cambian los '+' así que los vamos a reemplazar por puntos.
			$salt = strtr($salt, array('+' => '.')); 

			// Se genera el password hash
			$datos['Clave'] = crypt($cve, '$2y$10$' . $salt);
	        $this->muser->agregarusuario($datos);
	        $this->load->view('registrar');
        } */

  //       $this->form_validation->set_rules('name', 'nombre', 'required');
		// $this->form_validation->set_rules('app', 'appaterno', 'required');
		// $this->form_validation->set_rules('email', 'email', 'required');
		// $this->form_validation->set_rules('dep', 'dep', 'required');
		
  //       if ($this->form_validation->run() == FALSE)
  //       {
                		 
		//     $this->load->view('assets/header');
		// 	$this->load->view('assets/nav_bar');
		// 	$this->load->view('registrar');
		// 	$this->load->view('assets/footer');  
  //       }
  //       else
  //       {
		// 	$datos['nombre']=$this->input->post("name");
		// 	$datos['appaterno']=$this->input->post("app");
		// 	$datos['email']=$this->input->post("email");
		// 	$datos['dep']=$this->input->post("dep");


		//     $this->muser->agregarpersona($datos);
		//     $this->load->view('assets/header');
		// 	$this->load->view('assets/nav_bar');
		// 	$this->load->view('registrar',array("mensaje"=>"Agregado correctamente"));
		// 	$this->load->view('assets/footer');  
	 //    }
	}
	
	// function addusr(){

	// }

}