<?php
class CreateUser extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User','',TRUE);
	}
	
	function index()
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
			$this->load->view('new_user_view');
		}
		else {
			if ($this->User->isAvailable('email'))
			{
				if ($this->User->isAvailable('username')) {
					if ($this -> User -> addUserToDB()) {
						if (isset ($_SESSION['Error'])){
							unset ($_SESSION['Error']);
						}
						$this->User->login();
						//Go to private area
						redirect('home', 'refresh');
					}
					else {
						$_SESSION['Error']= 'A database error occured';
						$this->load->view('new_user_view');
					}
					
				}
				else {
					$_SESSION['Error']= 'That username is already in use';
					$this->load->view('new_user_view');
				}
			}
			else {
				$_SESSION['Error']= 'That email is already in use';
				$this->load->view('new_user_view');
			}
		}
	}
	
}	
?>