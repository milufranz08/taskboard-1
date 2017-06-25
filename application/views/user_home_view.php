
<!DOCTYPE html>
<?php

foreach ( $results as $row ) {
	if (array_key_exists ( 'username', $row )) {
		$username = $row->username;
		$user_id = $row->user_id;
	} else {
		$username = $row->email;
	}
}
?>
<html>
<body>

	<div class="container col-md-offset-1">

		<div class="body_cont col-md-offset-4">
			<h1>Welcome <?php echo $username; ?>!</h1>
		</div>

		<div class="secondary_nav col-md-offset-5">
			<a href="<?php echo site_url()?>/Site/newTask/<?php echo $user_id?>"
				class="btn btn-info" role="button">New Task</a> <a
				href="<?php echo site_url().'/Site/newProject';?>"
				class="btn btn-info" role="button">New Project</a>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-md-2 center-block">
					<div class="asideTop">
						<h4>Completed Tasks</h4>
						<p>
							<a href="<?php echo site_url()?>/Complete">View All</a>
						</p>
				
					<?php $i = 0;?>
					<?php foreach ($tasks as $row):?>
					<?php if($row->task_status == "3"):?>
					<?php if($i++ < 5):?>
					<taskTickets> <a
							href="<?php echo site_url()?>/Task/manage_task/<?php echo $row->task_id?>"
							type="button" class="btn btn-link"><?php echo $row->task_name?></a>
						</taskTickets>
					<?php endif;?>
					<?php endif;?>
					<?php endforeach;?>
				</div>

					<div class="asideBottom">
						<h4>
							Projects</a>
						</h4>
						<p>
							<a href="<?php echo site_url()?>/Complete/all_Projects">View All</a>
						</p>
					<?php $j = 0;?>
					<?php foreach ($projects as $row3):?>
					<?php if($j++ < 5):?>
					<taskTickets> <a
							href="<?php echo site_url()?>/Project/manage_project/<?php echo $row3->project_id?>"
							type="button" class="btn btn-link"><?php echo $row3->project_name?></a>
						<br>
						</taskTickets>
					<?php endif;?>
					<?php endforeach;?>
				</div>
				</div>

				<div class="col-6 col-md-10">
					<sectionTop>
					<h4 class="bold">In Progress</h4>
					<?php foreach ($tasks as $row1):?>
					<?php if($row1->task_status == "2"):?>
					<taskTickets>
					<div class="btn-group" role="group">
						<a
							href="<?php echo site_url()?>/Task/manage_task/<?php echo $row1->task_id?>"
							style="background-color: <?php echo $row1->task_color?>;"
							type="button" class="btn btn-default"><?php echo $row1->task_name?></a>
					</div>
					</taskTickets>
					<?php if($row1 == null):?>
						<div class="alert alert-info" role="alert">
						<a href="#" class="alert-link">No tasks in progress</a>
					</div>
					<?php endif;?>
					<?php endif;?>
					<?php endforeach;?>
				</sectionTop>

					<sectionBottom>
					<h4 class="bold">Not Started</h4>
					<?php foreach ($tasks as $row2):?>
					<?php if($row2->task_status == "1"):?>
					<taskTickets>
					<div class="btn-group" role="group">
						<a
							href="<?php echo site_url()?>/Task/manage_task/<?php echo $row2->task_id?>"
							style="background-color: <?php echo $row1->task_color?>;"
							type="button" class="btn btn-default"><?php echo $row2->task_name?></a>
					</div>
					</taskTickets>
					<?php if($row2 == null):?>
						<div class="alert alert-info" role="alert">
						<a href="#" class="alert-link">No tasks in progress</a>
					</div>
					<?php endif;?>
					<?php endif;?>
					<?php endforeach;?>	
				</sectionBottom>
				</div>

			</div>
		</div>
	</div>