<?php 
class Login extends CI_Controller {
 
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
    $this->load->view('login_view');
  }
 
}
?>
