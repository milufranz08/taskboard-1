
<?php
Class complete_model extends CI_Model {
	function get_completed_tasks($user_id)
	
	{
		$query = $this->db->get_where('tasks', array('task_assigned_to' => $user_id));
		return$query->result();
	}
	
	function get_all_projects()
	{
		$query = $this->db->get('projects');
		return$query->result();
	}
	
}

