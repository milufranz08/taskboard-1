<?php
Class User extends CI_Model {
  function login() {
    $this -> db -> select('user_id, username, password, team_lead_status');
    $this -> db -> from('users');
    $this -> db -> where('username', $_POST['username']);
    $this -> db -> where('password', md5($_POST['password']));
    $this -> db -> limit(1);
 
    $query = $this -> db -> get();
 
    if($query -> num_rows() == 1) {
    	$result = $query->result();
    	$_SESSION['data'] = $result;
    	foreach ($result as $row)
    	{
    		$_SESSION['username'] = $row->username;
    		$_SESSION['user_id'] = $row->user_id;
    	}
    	return true;
    }
    else {
    	$this -> db -> select('user_id, email, password');
    	$this -> db -> from('users');
    	$this -> db -> where('email', $_POST['username']);
    	$this -> db -> where('password', md5($_POST['password']));
    	$this -> db -> limit(1);
    	
    	$query = $this -> db -> get();
    	
    	if($query -> num_rows() == 1) {
    		$_SESSION['data']= $query->result();
    		return true;
    	}
    }
    return false;
  }
  
  function isAvailable($field) {
  	$this -> db -> select($field);
  	$this -> db -> from('users');
  	$this -> db -> where($field, $_POST[$field]);
  	$this -> db -> limit(1);
  	
  	$query = $this -> db -> get();
  	
  	if($query -> num_rows() == 1) {
  		//already in database
  		return false;
  	}
  	return true;
  }
  
  function addUserToDB() {
  	$firstname = $_POST['firstname'];
  	$lastname = $_POST['lastname'];
  	$email = $_POST['email'];
  	$username = $_POST['username'];
  	$password = md5($_POST['password']);
  	
  	$sql = "INSERT INTO users (first_name, last_name, email, username, password)
			VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
  	
  	return $this -> db -> query($sql);
  }
    
}
?>
