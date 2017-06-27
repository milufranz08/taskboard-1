
<?php
Class complete_model extends CI_Model {
	function get_completed_tasks($user_id)
	
	{
		$query = $this->db->get_where('tasks', array('task_assigned_to' => $user_id));
		return$query->result();
	}
	
	function get_all_projects()
	{
		$this->db->select('*');
		$this->db->from('projects');
		$this->db->join('tasks', 'tasks.task_project = projects.project_id', 'left');
		$this->db->join('color_coding', 'color_coding.color_id = projects.project_color_id');
		$query = $this->db->get();
		return$query->result();
	}
	
}

