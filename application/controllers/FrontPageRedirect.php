<?php 
/*
 * Redirects default view to front page
 */
class FrontPageRedirect extends CI_Controller {
 
  function __construct()
  {
    parent::__construct();
  }
 
  function index()
  {
  	redirect('login', 'refresh');
  }
 
}
?>
