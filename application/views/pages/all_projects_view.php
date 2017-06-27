


			<div  id="secondary_nav">
			<h2  align="right">

				<a href="<?php echo site_url()?>/Site/newTask/<?php echo $_SESSION["user_id"]?>" class="btn btn-info" role="button">New Task</a>
				<a href="<?php echo site_url().'/Site/newProject';?>" class="btn btn-info" role="button">New Project</a>


</h2>

<h1 align="center">All Projects<br><br></h1>





		<?php foreach ($projects as $row):?>
						<?php if($row->task_assigned_to == $_SESSION['user_id'] || $row->project_created_by == $_SESSION['user_id']):?>
						
						
						
							<taskTickets>
		  							<div class="btn-group role="group">
		    								 
		    								<a href="<?php echo site_url()?>/Complete/a_project/<?php echo $row->project_id?>
		    								"type="button" style="width:650px; height:100px; background-color:<?php echo $row->color_code?>;" 
		    								class="btn btn-default"><?php echo $row->project_name?></a>
									</div>
							</taskTickets>
							<?php endif;?>	
							<?php endforeach;?>	





		    								
		    								