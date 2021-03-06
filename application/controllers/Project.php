<?php
class Project extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model','',TRUE);
	}
	
	function home() {
		redirect('home', 'refresh');
	}
	
	function submit_project() {
		$this->Project_model->insertProject();
		$this->home();
	}
	
	function update_project($project_id) {
		if (isset($_POST['complete'])) {
			$numberOfIncompleteTasks = $this->Project_model->incompleteTasks($project_id);
			if ($numberOfIncompleteTasks['COUNT(*)'] > 0) {
				foreach ($numberOfIncompleteTasks as $row) {
					echo $row;
				}
				$_SESSION['Error'] = 'Project cannot be completed while there are incomplete tasks';
				$this->edit_project($project_id);
			} else {
				$this->Project_model->completeProject($project_id);
				$this->home();
			}
		}
		else if (isset($_POST['update'])) {
			$this->Project_model->updateProject($project_id);
			$this->home();
		}
		else if (isset($_POST['delete'])) {
			$this->Project_model->deleteProject($project_id);
		}
	}
	
	function manage_project($project_id)
	{
		$data["results"] = $_SESSION['data'];
		$data["projects"] = $this->Project_model->get_project($project_id);
		$data["tasks"] = $this->Project_model->get_all_tasks($project_id);
		$this->load->view('templates/header', $data);
		$this->load->view('pages/project_page_view');
		$this->load->view('templates/footer');
	}
	
	function edit_project($project_id)
	{
		$data["results"] = $_SESSION['data'];
		$data["project"] = $this->Project_model->get_project($project_id);
		$data["color"] = $this->Project_model->getColors();
		foreach($data["project"] as $row) {
			$color_id = $row->project_color_id;
		}
		$data["color_by_id"] = $this->Project_model->getColorFromId($color_id);
		if ($color_id == 13) {
			$this->load->view('templates/header', $data);
			$this->load->view('pages/completed_project_view');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header', $data);
			$this->load->view('pages/manage_project_view');
			$this->load->view('templates/footer');
		}
		
		if (isset ($_SESSION['Error'])){
			unset ($_SESSION['Error']);
		}
	}
	
	function all_Tasks($project_id)
	{
		$data["results"] = $_SESSION['data'];
		$data["project"] = $this->Project_model->get_all_tasks($project_id);
		
	}
	
}