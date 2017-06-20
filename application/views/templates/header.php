<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico">
    <title>Image Header Template for Bootstrap</title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/header.css" rel="stylesheet">
  </head>
  
    <body class="body-top">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="header-top">
	    <div class="container">
	      <h1 class="header-text">Task Board</h1>
	    </div>
	  </div>
	  <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href= "<?php echo site_url();?>/Home/logout"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href= "<?php echo site_url();?>/Home/logout"><span class="glyphicon glyphicon-info-sign"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
	</body>




    <head>
    <meta charset="utf-8">
    <title>Task Board<?php if (isset($page_title)) { echo ' | '.$page_title; } ?></title>
    
    	<link rel = "stylesheet" type = "text/css" 
   			href = "<?php echo base_url(); ?>assets/css/style.css">
   		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
   		<script src="<?php echo site_url();?>assets/js/moment.min.js" type="text/javascript"></script>
   		<script src="<?php echo site_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    


