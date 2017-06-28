<?php
Class Homepage_model extends CI_Model {
	function getTasks($user_id){
		$this->db->select('*');
		$this->db->from('tasks');
		$this->db->where('task_assigned_to', $user_id);
		$this->db->order_by('task_timestamp', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	function getProjects(){
		
		$this->db->select('*');
		$this->db->from('projects');
		$this->db->join('tasks', 'tasks.task_project = projects.project_id', 'left');
		$this->db->join('color_coding', 'color_coding.color_id = projects.project_color_id');
		$query = $this->db->get();
		return $query->result();
	}
	
}