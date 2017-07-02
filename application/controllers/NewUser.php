<?php
class NewUser extends CI_Controller {
	
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
		$this->loadPage();
	}
	
	function loadPage() {
		$data["results"] = $_SESSION['data'];
		$this->load->helper(array('form'));
		$this->load->view('templates/header', $data);
		$this->load->view('new_user_view');
		$this->load->view('templates/footer');
	}
	
	function create_user()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$_SESSION['Error'] = 'All fields are required';
			$this->loadPage();
		}
		else {
			if ($this->User->isAvailable('email'))
			{
				if ($this->User->isAvailable('username')) {
					if ($this -> User -> addUserToDB()) {
						if (isset ($_SESSION['Error'])){
							unset ($_SESSION['Error']);
						}
						//echo '<script>alert("You have succesfully created a new user");</script>';
						redirect('home', 'refresh');
					}
					else {
						$_SESSION['Error']= 'A database error occured';
						$this->loadPage();
					}
					
				}
				else {
					$_SESSION['Error']= 'That username is already in use';
					$this->loadPage();
				}
			}
			else {
				$_SESSION['Error']= 'That email is already in use';
				$this->loadPage();
			}
		}
	}
	
}
?>