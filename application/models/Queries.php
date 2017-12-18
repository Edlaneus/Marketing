<?php

	class Queries extends CI_Model
	{
		public function getPosts()
		{
			$query = $this->db->get('usu');  // Produces: SELECT * FROM mytable
			if ($query->num_rows() > 0) {
				return $query->result();
			}
		}
		public function addPost($data)
		{
			return $this->db->insert('usu', $data);
		}
		public function getSinglePosts($numevento)
		{
			$query = $this->db->get_where('usu', array('numevento' => $numevento));
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		public function updatePost($data,$numevento)
		{
			return $this->db->where('numevento',$numevento)
									->update('usu',$data);
	}
	public function deletePosts($numevento)
		{
			return $this->db->delete('usu',['numevento'=>$numevento]);
		}}
?>
