<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function newTask($user_id)
	{
		$this->load->model('Task_model');
		$data["results"] = $_SESSION['data'];
		$data["project"] = $this->Task_model->get_project();
		$data["users"] = $this->Task_model->get_users();
		$data["tasks"] = $this->Task_model->get_tasks($user_id);
		$this->load->view('templates/header', $data);
		$this->load->view('pages/create_new_task_view');
		$this->load->view('templates/footer');
		
	}
	
	public function completeTasks()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/all_completed_tasks_view');
		$this->load->view('templates/footer');
	}
	
	public function newProject()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/new_project_page_view');
		$this->load->view('templates/footer');
	}
	
	public function projects()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/all_projects_view');
		$this->load->view('templates/footer');
	}
	
	public function inProgress()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/all_projects_view');
		$this->load->view('templates/footer');
	}
	
}

?>
