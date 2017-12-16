<?php
/**
* 
*/
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			
			'email' => $param['email'],
			'tipo_usuario' => $param['tipo_usuario'],
			'fecnac' => date('Y-m-d H:i:s'),
//			'fecnac' => $param['fecnac'],			
		);

		$this->db->insert('persona',$campos);

		return $this->db->insert_id();
	}

	public function actualizarDatos($param){
		$campos = array(
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email']
		);
		$this->db->where('idPersona',$this->session->userdata('s_idPersona'));
		$this->db->update('persona',$campos);
		
		return 1;
	}

	public function eliminarPersona($idP){
		$campos = array(
			'idPersona' => $idP
			);

		$this->db->delete('persona',$campos);

	}

	public function getPersonas(){
		$this->db->select('p.idPersona rownum, p.idPersona,p.nombre,p.appaterno app,p.apmaterno,p.dni,c.ciudad,p.email,p.intEstado');
		$this->db->from('persona p');
		$this->db->join('ciudades c','c.idCiudad = p.idCiudad');

		// $q = "SELECT p.idPersona rownum, p.idPersona,p.nombre,p.appaterno app,p.apmaterno,p.dni,c.ciudad,p.email
		// 		FROM persona p
		// 		INNER JOIN ciudades c ON c.idCiudad = p.idCiudad
		// 		LIMIT 0,2";

		// $r = $this->db->query($q);
		$r = $this->db->get();

		return $r->result();
	}

	public function updPersona($param){
		$campos = array(
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email']
		);
		$this->db->where('idPersona', $param['idPersona']);
		$this->db->update('persona',$campos);
		
		return 1;
	}
}