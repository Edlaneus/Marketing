<?php
/**
* 
*/
class Publicaciones_model extends CI_Model
{
	
    	  function agregarpersona($datos)
			{
         		$this->db->insert('persona', $datos);
     		}

    	  function agregarusuario($datos)
			{
         		$this->db->insert('usuario', $datos);
     		}

     		 function getpublicaciones()
            {
                $this->db->select('*');
                $this->db->from('eventos');
                $this->db->join('status', 'eventos.status = status.status_id');
                $query = $this->db->get();
                return $query->result_array();
                //return $query->row();
//              $query = $this->db->get('eventos');
  //            return $query->result_array();
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
          function getpublicacion($id){
                $this->db->where('id_evento',$id);
                $query = $this->db->get('eventos');

                return $query->result_array()[0];
            }

          function actualizar($datos,$id){
                $this->db->where('id_evento',$id);        
                $this->db->update('eventos', $datos);
            }

}