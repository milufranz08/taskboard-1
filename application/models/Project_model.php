<?php
Class Project_model extends CI_Model {
	function get_project($project_id){
		$this->db->select('project_id, project_name, project_desc, project_color_id, project_created_by');
		$this->db->from('projects');
		$this->db->where('project_id', $project_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function getColors() {
				
		$this->db->select('*');
		$this->db->from('color_coding');
		$this->db->join('projects', 'projects.project_color_id = color_coding.color_id', 'left');
		$this->db->where('projects.project_color_id', NULL);
		$query = $this->db->get();
		return $query->result();
	}
	
	function getColorFromId($color_id) {
		$this->db->select('color_name');
		$this->db->from('color_coding');
		$this->db->where('color_id', $color_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function insertProject()
	{
		$data = array(
				'project_name' => $_POST['project_name'],
				'project_color_id' => $_POST['color_id'],
				'project_desc' => $_POST['project_desc'],
				'project_created_by' => $_POST['project_created_by']
		);
		$this->db->insert('projects', $data);
	}
	
	function incompleteTasks($project_id) {
		$this->db->select('COUNT(*)');
		$this->db->from('tasks');
		$array = array('task_project' => $project_id, 'task_status !=' => 3);
		$this->db->where($array);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	function completeProject($project_id) {
		$data = array(
				'project_name' => $_POST['project_name'],
				'project_color_id' => 13,
				'project_desc' => $_POST['project_desc'],
				'project_created_by' => $_POST['project_created_by'],
		);
		$this->db->where('project_id', $project_id);
		$this->db->update('projects', $data);
	}
	
	function updateProject($project_id) {
		$data = array(
				'project_name' => $_POST['project_name'],
				'project_color_id' => $_POST['color_id'],
				'project_desc' => $_POST['project_desc'],
				'project_created_by' => $_POST['project_created_by'],
		);
		$this->db->where('project_id', $project_id);
		$this->db->update('projects', $data);
	}
	
	function deleteProject($project_id) {
		//This method is currently unused
		//To utilize this method uncomment the 'delete' button in the manage_project_view
		//$this->db->where('project_id', $project_id);
		//$this->db->delete('projects');
	}
	
	function get_all_tasks($project_id)
	{
		$this->db->where('project_id', $project_id);
		$this->db->from('tasks');
		$this->db->join('projects', 'projects.project_id = tasks.task_project', 'left');
		$query = $this->db->get();
		return$query->result();
	}
}