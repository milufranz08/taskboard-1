<!DOCTYPE html>
<html lang="en">
   		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
   		<link rel ="stylesheet" href ="<?php echo base_url();?>assets/css/style.css">
   		<script src="<?php echo site_url();?>assets/js/moment.min.js" type="text/javascript"></script>
   		<script src="<?php echo site_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
    <title>Task Board<?php if (isset($page_title)) { echo ' | '.$page_title; } ?></title>

  </head>
<body>

		<div class="header">
			<h1 class="large">Task Board</h1>
		</div>
	<div class="row">
		<div class="col">
			<div id="navbar container">
			    <div class="navbar navbar-inverse" role="navigation">
			    	<ul class="nav navbar-nav">
			            <li style="padding-left: 20px;"><a href= "<?php echo site_url();?>/Home"><span ></span> Home</a></li>
			            <li style="float: right;"><a href= "<?php echo site_url();?>/Home/logout"><span></span> Logout</a></li>
			        </ul>
			     </div>
			</div>
		</div>
	</div>




    


