<?php
/**
* 
*/
class muser extends CI_Model
{
	
    	  function agregarpersona($datos)
			{
         		$this->db->insert('persona', $datos);
     		}

    	  function agregarusuario($datos)
			{
         		$this->db->insert('usuario', $datos);
     		}

     		 function getestaciona()
            {
              $query = $this->db->get('persona');
              return $query->result_array();
            }       
          function getestacion($id){
                $this->db->where('idPersona',$id);
                $query = $this->db->get('persona');

                return $query->result_array()[0];
            }

          function updateestacion($datos,$id){
                $this->db->where('idPersona',$id);        
                $this->db->update('persona', $datos);
            }
     
          function delestacion($id){
                $this->db->where('idPersona',$id);
                $this->db->delete('persona');
            } 

}