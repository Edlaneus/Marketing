<?php
/**
* 
*/
class Mcalendar extends CI_Model
{
	
	public function getEventos(){
		$this->db->select('id_Evento id, nombre_evento title, fecInicio start, descripcion end');
		$this->db->from('eventos');

		return $this->db->get()->result();
	}

	public function updEvento($param){
		$campos = array(
			'fecInicio' => $param['fecini'],
			);

		$this->db->where('id_evento',$param['id']);
		$this->db->update('eventos',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	public function deleteEvento($id){
		$this->db->where('id_evento', $id);
		return $this->db->delete('eventos');
	}

	public function updEvento2($param){
		$campos = array(
			'nombre_evento' => $param['nome'],
			'descripcion' => $param['web']
			);

		$this->db->where('id_evento',$param['id']);
		$this->db->update('eventos',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}
}