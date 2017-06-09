<?php
Class User extends CI_Model {
  function login() {
    $this -> db -> select('user_id, username, password');
    $this -> db -> from('users');
    $this -> db -> where('username', $_POST['username']);
    $this -> db -> where('password', $_POST['password']);
    $this -> db -> limit(1);
 
    $query = $this -> db -> get();
 
    if($query -> num_rows() == 1) {
    	$_SESSION['data']= $query->result();
    	return true;
    }
    else {
    	$this -> db -> select('user_id, email, password');
    	$this -> db -> from('users');
    	$this -> db -> where('email', $_POST['username']);
    	$this -> db -> where('password', $_POST['password']);
    	$this -> db -> limit(1);
    	
    	$query = $this -> db -> get();
    	
    	if($query -> num_rows() == 1) {
    		$_SESSION['data']= $query->result();
    		return true;
    	}
    }
    return false;
  }
}
?>
