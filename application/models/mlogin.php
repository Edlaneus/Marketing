<?php
/**
* 
*/
class Mlogin extends CI_Model
{
	public function ingresar($usu,$pass){
		$this->db->select('p.idPersona,u.idUsuario, p.nombre, p.appaterno, p.apmaterno, t.privilegios ');
		$this->db->from('usuario u');
		$this->db->join('persona p','p.idPersona = u.idPersona');
		$this->db->join('tipo_usuario t','t.id_tipo = u.idrol');
		$this->db->where('u.nomUsuario',$usu);
		$this->db->where('u.clave',$pass);

		$resultado = $this->db->get();


		if ($resultado->num_rows() == 1) {
			$r = $resultado->row();

			$s_usuario = array(
				's_idPersona' => $r->idPersona,
				's_idUsuario' => $r->idUsuario,
				's_usuario' => $r->nombre.", ".$r->appaterno." ".$r->apmaterno,
				's_priv' => $r->privilegios
				);

			$this->session->set_userdata($s_usuario);}
			return $resultado->result();

		// 	// $this->session->userdata('s_idUsuario',$r->idUsuario);
		// 	// $this->session->userdata('s_usuario', $r->nombre.", ".$r->appaterno);

		// 	return 1;
		// }else{
		// 	return 0;
		// }

	}
}