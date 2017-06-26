<?php
Class homepage_model extends CI_Model {
	function getTasks($user_id){
		$this->db->select('*');
		$this->db->from('tasks');
		$this->db->where('task_assigned_to', $user_id);
		$this->db->order_by('task_timestamp', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	function getProjects(){
		$query = $this->db->get('projects');
		return $query->result();
	}
	
}