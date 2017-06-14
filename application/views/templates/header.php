<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Task Board<?php if (isset($page_title)) { echo ' | '.$page_title; } ?></title>
    
    	<link rel = "stylesheet" type = "text/css" 
   			href = "<?php echo base_url(); ?>assets/css/style.css">
   		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
   		<script src="<?php echo site_url();?>assets/js/moment.min.js" type="text/javascript"></script>
   		<script src="<?php echo site_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    
    <body class="container group">
        <title>Task Board</title>
        <h1 class="logo">
        	Task Board
		</h1>
		<div class="topnav">
			<ul>
        		<sectionNavL>
					<a href="<?php echo site_url();?>/Home">Home</a>

				</sectionNavL>
			
				<sectionNavR>
					<a href= "<?php echo site_url();?>/Home/logout">Logout</a>
				</sectionNavR>
			</ul>		
		</div>

