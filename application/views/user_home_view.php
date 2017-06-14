 <!DOCTYPE html>
	<?php foreach($results as $row){
		if (array_key_exists('username', $row)) {
			$username = $row->username;
			$user_id = $row->user_id;
		}
		else {
			$username = $row->email;
		}
	}?>
<html>
 <body>
 
 	<div id="main-wrapper">
 		<header>
   			<title>Home</title> 
		</header>

		<div  id="body_cont">
			<h1>Welcome <?php echo $username; ?>!</h1>
			
			<div  id="secondary_nav">
				<a href="<?php echo site_url()?>/Site/newTask/<?php echo $user_id?>">New Task</a>
				<a href="<?php echo site_url().'/Site/newProject';?>">New Project</a>
			</div>
			
			<div class="group">
				<sectionTop>
					<h4>In Progress</h4>
					<taskTickets>
						<div class="ticket">
							<a href='<?php echo site_url()?>/Task/manage_task/<?php /*task id will go here-*/?>'>Task</a>
						</div>
						<div class="ticket">
							<a href='inProgress'>Task</a>
						</div>
						<div class="ticket">
							<a href='inProgress'>Task</a>
						</div>
					</taskTickets>
				</sectionTop>
				<asideTop>
					<h4><a href="completeTasks">Completed Tasks</a></h4>
				</asideTop>
				<sectionTop>
					<h4>Not Started</h4>
					<taskTickets>
						<div class="ticket">
							<a href='inProgress'>Task</a>
						</div>
						<div class="ticket">
							<a href='inProgress'>Task</a>
						</div>
						<div class="ticket">
							<a href='inProgress'>Task</a>
						</div>
					</taskTickets>
				</sectionTop>
				<asideTop>
					<h4><a href="projects">Projects</a></h4>
				</asideTop>
				<div class="sectionBottom">
				</div>
			</div>
		</div>
</body>