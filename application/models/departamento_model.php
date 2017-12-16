<?php  
/**
* 
*/
class Departamento_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}





	public function getDepartamento($s){
		$s = $this->db->get_where('departamento',array('sitReg' => $s));
		return $s->result();
	}
	


	

	
}
