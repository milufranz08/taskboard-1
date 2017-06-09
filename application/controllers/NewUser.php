<?php
class NewUser extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		if (isset ($_SESSION['Error'])){
			unset ($_SESSION['Error']);
		}
		$this->load->helper(array('form'));
		$this->load->view('new_user_view');
	}
	
}
?>