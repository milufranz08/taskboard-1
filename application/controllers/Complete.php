<?php
class Complete extends CI_Controller {
 
	
 function __construct()
 {
   parent::__construct();
   $this->load->model('Task_model','',TRUE);
   $this->load->model('Homepage_model','',TRUE);
   $this->load->model('Complete_model','',TRUE);
   $this->load->model('Project_model','',TRUE);
 }
 
 function index()
 {
 	$data["completed"]=$this->Complete_model->get_completed_tasks($_SESSION["user_id"]);
 	
 	$this->load->view('templates/header');
 	$this->load->view('pages/all_completed_tasks_view', $data);
 	$this->load->view('templates/footer');
 	
 	
 }
 
 	function all_Projects()
 	{
 		
 		$data["projects"]=$this->Complete_model->get_all_projects();
 		$data["results"] = $_SESSION['data'];
 		$this->load->view('templates/header');
 		$this->load->view('pages/all_projects_view', $data);
 		$this->load->view('templates/footer');
 		
 	}
 
 	function a_Project($project_id)
 	{
 			
 		$data["projects"] = $this->Project_model->get_project($project_id);
 		$data["results"] = $_SESSION['data'];
 		$this->load->view('templates/header');
 		$this->load->view('pages/project_page_view', $data);
 		$this->load->view('templates/footer');
 			
 	}
 	
}

 
 