<?php
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('Task_model','',TRUE);
 }
 
 function index()
 {
 	$data["results"] = $_SESSION['data'];
 	$this->load->view('templates/header');
	$this->load->view('user_home_view', $data);
	$this->load->view('templates/footer');
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('login', 'refresh');
 }
 
}
 
?>
