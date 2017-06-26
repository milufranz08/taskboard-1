 <!DOCTYPE html>
	<?php foreach($results as $row){
		if (array_key_exists('username', $row)) {
			$username = $row->username;
			$user_id = $row->user_id;
			$team_lead_status = $row->team_lead_status;
		}
		else {
			$username = $row->email;
		}
	}?>
<html>
 <body> 
 		<?php if ($team_lead_status === 'Y') :?>
 		<div class="span1 text-right">
			<a href="<?php echo site_url()?>/Login/newuser" class="btn btn-info" role="button" style="margin-right:30px;">Add User</a>
		</div>
		<?php endif; ?>
		<div class="container">
		
			<div  class="body_cont col-md-offset-4">
				<h1>Welcome <?php echo $username; ?>!</h1>
			</div>	
			<br><br>
			<div  class="secondary_nav">
				<a href="<?php echo site_url()?>/Site/newTask/<?php echo $user_id?>" class="btn btn-info" role="button">New Task</a>
				<?php if ($team_lead_status === 'Y') :?>
				<a href="<?php echo site_url().'/Site/newProject';?>" class="btn btn-info" role="button">New Project</a>
				<?php endif; ?>
  			</div>
  			

  		<div class="row">  	
			<div class="col-6 col-md-2 center-block">
  				<div class="asideTop">
					<h4>Completed Tasks</h4>
					<p><a href="<?php echo site_url()?>/Complete">View All</a></p>
				
					<?php $i = 0;?>
					<?php foreach ($tasks as $row):?>
					<?php if($row->task_status == "3"):?>
					<?php if($i++ < 5):?>
					<taskTickets>
						<a
							href="<?php echo site_url()?>/Task/manage_task/<?php echo $row->task_id?>"
							type="button" class="btn btn-link"><?php echo $row->task_name?></a>
					</taskTickets>
					<?php endif;?>
					<?php endif;?>
					<?php endforeach;?>
				</div>
				
				<div class="asideBottom">
					<h4>Projects</a></h4>
					<p><a href="<?php echo site_url()?>/Complete/all_Projects">View All</a></p>
					<?php $j = 0;?>
					<?php foreach ($projects as $row3):?>
					<?php if($j++ < 5):?>
					<taskTickets>
						<a
							href="<?php echo site_url()?>/Project/manage_project/<?php echo $row3->project_id?>"
							type="button" class="btn btn-link"><?php echo $row3->project_name?></a><br>
					</taskTickets>
					<?php endif;?>
					<?php endforeach;?>
				</div>		
			</div>
			
  			<div class="col-6 col-md-10">
  				<sectionTop>
					<h4 class="bold">In Progress</h4>
					<taskTickets>
					<?php $b = 0;?>
					<?php foreach ($tasks as $row1):?>
					<?php if($row1->task_status == "2"):?>
					<?php $b++;?>
					
					<div class="btn-group" role="group">
						<a
							href="<?php echo site_url()?>/Task/manage_task/<?php echo $row1->task_id?>"
							style="background-color: <?php echo $row1->task_color?>;"
							type="button" class="btn btn-default"><?php echo $row1->task_name?></a>
					</div>					
					<?php endif;?>
					<?php endforeach;?>
					<?php if($b == 0):?>
					<div class="col-md-10 col-md-offset-1">
						<div class="alert alert-info text-center" role="alert">
  							<p class="alert-link">You haven't started any task yet!</p>
						</div>
					</div>
					<?php endif;?>
					</taskTickets>
				</sectionTop><br><br><br><br>
				
				<sectionBottom>
					<h4 class="bold">Not Started</h4>
					<taskTickets>
					<?php $a = 0;?>
					<?php foreach ($tasks as $row2):?>
					<?php if($row2->task_status == "1"):?>
					<?php $a++;?>
					
					<div class="btn-group" role="group">
						<a
							href="<?php echo site_url()?>/Task/manage_task/<?php echo $row2->task_id?>"
							style="background-color: <?php echo $row2->task_color?>;"
							type="button" class="btn btn-default"><?php echo $row2->task_name?></a>
					</div>
					
					<?php endif;?>
					<?php endforeach;?>	
					<?php if($a == 0):?>
					<div class="col-md-10 col-md-offset-1">
						<div class="alert alert-info text-center" role="alert">
  							<p class="alert-link">You have started all your tasks!</p>
						</div>
					</div>
					<?php endif;?>
					</taskTickets>
				</sectionBottom>	
			</div>
			
		</div>
  		</div>
  		</div>
