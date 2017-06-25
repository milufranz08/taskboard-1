

			<div  id="secondary_nav">
			<h2  align="right">

				<a href="<?php echo site_url()?>/Site/newTask/<?php echo $_SESSION["user_id"]?>" class="btn btn-info" role="button">New Task</a>
				<a href="<?php echo site_url().'/Site/newProject';?>" class="btn btn-info" role="button">New Project</a>
</div>



</h2>

<h1 align="center">Completed Tasks<br><br><br></h1>

		
		
		<?php foreach ($completed as $row):?>
							<?php if($row->task_status == "3"):?>
							<taskTickets>
		  							<div class="btn-group" role="group">
		    								<a href="<?php echo site_url()?>/Task/completed_tasks/<?php echo $row->task_id?>" 
		    								type="button" style="background-color: <?php echo $row->task_color?>;" 
		    								class="btn btn-default"><?php echo $row->task_name?></a>
									</div>
							</taskTickets>
							<?php endif;?>
							<?php endforeach;?>	
	

	
