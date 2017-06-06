<?php 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('User','',TRUE);
 }
 
 function index()
 {
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required');
   
   if($this->form_validation->run() == FALSE)
   {
     //Redirect to login page
     $this->load->view('login_view');
     $_SESSION['Error'] = 'Username or password is invalid';
   }
   else
   {
   	if ($this->User->login())
   	{
   		if (isset ($_SESSION['Error'])){
   			unset ($_SESSION['Error']);
   		}
     //Go to private area
     redirect('home', 'refresh');
   	}
   	else {
   		$_SESSION['Error'] = 'Username or password is invalid';
   		$this->load->view('login_view');
   	}
   }
 }
}
?>
