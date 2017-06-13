<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Task Board<?php if (isset($page_title)) { echo ' | '.$page_title; } ?></title>
    
    	<link rel = "stylesheet" type = "text/css" 
   			href = "<?php echo base_url(); ?>assets/css/style.css">
    </head>
    
    <body class="container group">
        <title>Task Board</title>
        <h1 class="logo">
        	Task Board
		</h1>
		<div class="topnav">
			<ul>
        		<sectionNavL>
					<a href='home'>Home</a>

				</sectionNavL>
			
				<sectionNavR>
					<a href='home/logout'>Logout</a>
				</sectionNavR>
			</ul>		
		</div>

