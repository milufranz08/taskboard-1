<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function homeLink()
	{
		$this->load->view('templates/header');
		$this->load->view('user_home_view');
		$this->load->view('templates/footer');	
	}
	
	public function newTask()
	{
		$this->load->view('templates/header');
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
		$this->load->view('pages/project_page_view');
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
