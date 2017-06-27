
<?php
class Complete extends CI_Controller {
 
	
 function __construct()
 {
   parent::__construct();
   $this->load->model('Task_model','',TRUE);
   $this->load->model('homepage_model','',TRUE);
   $this->load->model('complete_model','',TRUE);
 }
 
 function index()
 {
 	$data["completed"]=$this->complete_model->get_completed_tasks($_SESSION["user_id"]);
 	
 	$this->load->view('templates/header');
 	$this->load->view('pages/all_completed_tasks_view', $data);
 	$this->load->view('templates/footer');
 	
 	
 }
 
 	function all_Projects()
 	{
 		
 		$data["projects"]=$this->complete_model->get_all_projects();
 		$data["results"] = $_SESSION['data'];
 		$this->load->view('templates/header');
 		$this->load->view('pages/all_projects_view', $data);
 		$this->load->view('templates/footer');
 		
 	}
 
 	function a_Project()
 	{
 			
 		$data["projects"]=$this->complete_model->get_all_projects();
 		$data["results"] = $_SESSION['data'];
 		$this->load->view('templates/header');
 		$this->load->view('pages/project_page_view', $data);
 		$this->load->view('templates/footer');
 			
 	}
 	
}

 
 