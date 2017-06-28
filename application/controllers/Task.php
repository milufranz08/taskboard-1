<?php
class Task extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Task_model','',TRUE);
		$this->load->model('Homepage_model','',TRUE);
	}
	
	function new_task($user_id)
	{
		$data["results"] = $_SESSION['data'];
		$data["project"] = $this->Task_model->get_project();
		$data["users"] = $this->Task_model->get_users();
		$data["tasks"] = $this->Homepage_model->get_tasks($user_id);
		$this->load->view('templates/header', $data);
		$this->load->view('new_task');
		$this->load->view('templates/footer');
	}
	function submit_task()
	{
		$this->Task_model->insertTask();
		$data["results"] = $_SESSION['data'];
		$data["tasks"] = $this->Homepage_model->getTasks($_SESSION['user_id']);
		$data["projects"] = $this->Homepage_model->getProjects();
		$this->load->view('templates/header', $data);
		$this->load->view('user_home_view');
		$this->load->view('templates/footer');
	}
	function update_task($task_id)
	{
		$this->Task_model->update_task($task_id);
		$data["results"] = $_SESSION['data'];
		$data["tasks"] = $this->Homepage_model->getTasks($_SESSION['user_id']);
		$data["projects"] = $this->Homepage_model->getProjects();
		$this->load->view('templates/header', $data);
		$this->load->view('user_home_view');
		$this->load->view('templates/footer');
	}
	function manage_task($task_id)
	{
		$data["results"] = $_SESSION['data'];
		$data["project"] = $this->Task_model->get_project();
		$data["users"] = $this->Task_model->get_users();
		$data["project_name"] = $this->Task_model->get_project_name($task_id);
		$data["user_name"] = $this->Task_model->get_user_name($task_id);
		$data["tasks"]= $this->Task_model->getTask($task_id);
		$this->load->view('templates/header', $data);
		$this->load->view('pages/manage_task_view');
		$this->load->view('templates/footer');
	}
	
	function completed_tasks($task_id)
	{
		$data["results"] = $_SESSION['data'];
		$data["project"] = $this->Task_model->get_project();
		$data["users"] = $this->Task_model->get_users();
		$data["project_name"] = $this->Task_model->get_project_name($task_id);
		$data["user_name"] = $this->Task_model->get_user_name($task_id);
		$data["tasks"]= $this->Task_model->getTask($task_id);
		$this->load->view('templates/header', $data);
		$this->load->view('pages/completed_tasks_view');
		$this->load->view('templates/footer');
	}
	
	
}