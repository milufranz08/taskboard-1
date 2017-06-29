<?php 
Class Task_model extends CI_Model {
	function get_project(){
		$this->db->select('*');
		$this->db->from('projects');
		$this->db->join('tasks', 'tasks.task_project = projects.project_id', 'left');
		$this->db->join('color_coding', 'color_coding.color_id = projects.project_color_id');
		$this->db->group_by('project_id');
		$query = $this->db->get();
		return $query->result();
  }
  function get_tasks($user_id){
  	$query = $this->db->get_where('tasks', array('task_assigned_to' => $user_id));
  	return $query->result();
  }
  function get_users(){
  	$query = $this->db->get('users');
  	return $query->result();
  }
  function get_task()
  {
  	$query = $this->db->get('tasks');
  	return $query->result();
  }
  function insertTask()
  {
  	$data = array(
  			'task_name' => $_POST['task_name'],
  			'task_description' => $_POST['task_desc'],
  			'task_notes' => $_POST['task_notes'],
  			'task_project' => $_POST['task_project'],
  			'task_assigned_to' => $_POST['task_assigned_to'],
  			'task_color' => $this->getColor($_POST['task_project']),
  			'task_timestamp' => $_POST['timestamp'],
  			'task_status' => '1',
  			'task_created_by' => $_POST['task_created_by']
  	);
  	$this->db->insert('tasks', $data);
  }
  function update_task($task_id)
  {
  	$data = array(
  			'task_name' => $_POST['task_name'],
  			'task_description' => $_POST['task_desc'],
  			'task_notes' => $_POST['task_notes'],
  			'task_project' => $_POST['task_project'],
  			'task_assigned_to' => $_POST['task_assigned_to'],
  			'task_color' => $this->getColor($_POST['task_project']),
  			'task_timestamp' => $_POST['timestamp'],
  			'task_completed' => $_POST['task_completed'],
  			'task_status' => $_POST['status']
  	);
  	$this->db->where('task_id', $task_id);
  	$this->db->update('tasks', $data);
  }
  function getTask($task_id)
  {
  	
  	$query = $this->db->get_where('tasks', array('task_id' => $task_id));
  	$result = $query->result();

  	return $query->result();
 }
  	function get_user_name($task_id){
  		
  		$user_id_query = $this->db->select('task_assigned_to')
  		->where('task_id', $task_id)
  		->get('tasks');
  		
  		$user_id_result = $user_id_query->result();
  		
  		foreach ($user_id_result as $row)
  		{
  			$user_id = $row->task_assigned_to;
  		}
  		
  		$firstname_query = $this->db->select('first_name')
  		->where('user_id', $user_id)
  		->get('users');
  		
  		$firstname = $firstname_query->result();
  		
  		foreach ($firstname as $row1)
  		{
  			$first_name = $row1->first_name;
  		}
  		
  		$last_name_query = $this->db->select('last_name')
  		->where('user_id', $user_id)
  		->get('users');
  		
  		$lastname = $last_name_query->result();
  		
  		foreach ($lastname as $row2)
  		{
  			$last_name= $row2->last_name;
  		}
  		
  		
  		return $first_name." ".$last_name;
  		
 	 }
 	function get_project_name($task_id){
 		
 		$project_id_query = $this->db->select('task_project')
 		->where('task_id', $task_id)
 		->get('tasks');
 		
 		$project_id_result = $project_id_query->result();
 		
 		foreach ($project_id_result as $row)
 		{
 			$project_id = $row->task_project;
 		}
 		
 		$projectname = $this->db->select('project_name')
 		->where('project_id', $project_id)
 		->get('projects');
 		
 		$project_name_query = $projectname->result();
 		foreach ($project_name_query as $row1)
 		{
 			$project_name = $row1->project_name;
 		}
 		
 		return $project_name;
  	}
  	function getColor($color)
  	{
  		
  		$query = $this->db->select('project_color_id')
  		->where('project_id', $color)
  		->get('projects');
  		foreach ($query->result()as $row)
  		{
  			$color_id = $row->project_color_id;
  		}
  		$query2 = $this->db->select('color_code')
  		->where('color_id', $color_id)
  		->get('color_coding');
  		foreach ($query2->result() as $row2)
  		{
  			$color_code = $row2->color_code;
  		}
  		
  		
  		return $color_code;
  	}
}
?>