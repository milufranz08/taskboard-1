<?php
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
 	$data["results"] = $_SESSION['data'];
	$this->load->view('home_view', $data);
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('login', 'refresh');
 }
 
}
 
?>
