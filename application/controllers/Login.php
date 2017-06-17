<?php 
class Login extends CI_Controller {
 
  function __construct()
  {
    parent::__construct();
    $this->load->model('User','',TRUE);
  }
 
  function index()
  {
  	if (isset ($_SESSION['Error'])){
  		unset ($_SESSION['Error']);
  	}
    $this->load->helper(array('form'));
    $this->load->view('login_view');
  }
  
  function verify_login()
  {
  	$this->load->library('form_validation');
  	
  	$this->form_validation->set_rules('username', 'Username', 'trim|required');
  	$this->form_validation->set_rules('password', 'Password', 'trim|required');
  	
  	if($this->form_validation->run() == FALSE)
  	{
  		//Redirect to login page
  		$_SESSION['Error'] = 'Username and Password are both required';
  		$this->load->view('login_view');
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
  			//redirect to login page
  			$_SESSION['Error'] = 'Username or password is invalid';
  			$this->load->view('login_view');
  		}
  	}
  }
  
  function newuser() {
  	redirect('NewUser', 'refresh');
  }
 
}
?>
