


		
		
		<?php foreach ($completed as $row):?>
							<?php if($row->task_status == "3"):?>
							<taskTickets>
		  							<div class="btn-group" role="group">
		    								<a href="<?php echo site_url()?>/Task/manage_task/<?php echo $row->task_id?>" 
		    								type="button" style="background-color: <?php echo $row->task_color?>;" 
		    								class="btn btn-default"><?php echo $row->task_name?></a>
									</div>
							</taskTickets>
							<?php endif;?>
							<?php endforeach;?>	
	
