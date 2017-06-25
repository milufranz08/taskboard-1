<?php
class Project extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model','',TRUE);
	}
	
	function manage_project($project_id)
	{
		$data["results"] = $_SESSION['data'];
		$data["project"] = $this->Project_model->get_project();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/project_page_view');
		$this->load->view('templates/footer');
	}
}