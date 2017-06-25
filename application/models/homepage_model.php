<?php
Class homepage_model extends CI_Model {
	function getTasks($user_id){
		$query = $this->db->get_where('tasks', array('task_assigned_to' => $user_id));
		return $query->result();
	}
	
	function getProjects(){
		$query = $this->db->get('projects');
		return $query->result();
	}
	
}