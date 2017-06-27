<?php

foreach ( $results as $row ) {
	$user_id = $row->user_id;
}
?>
<?php

foreach ( $projects as $row1 ) {
	$project_id = $row1->project_id;
	$created_by = $row1->project_created_by;
	$project_name = $row1->project_name;
}
?>

<h1 align="center"><?php echo $project_name?></h1>
<br>
<br>
<div class='container-fluid'>
	<div class='row-fluid'>
  <?php if ($user_id == $created_by) : ?> 
  <div class="span4 offset4 text-center">
			<a
				href="<?php echo site_url()?>/Project/edit_project/<?php echo $project_id?>"
				class="btn btn-info" role="button">Manage Project</a>
		</div>
  <?php endif; ?>
  </div>
	<div class="body_cont col-md-offset-2">

		<div class="btn-group" role="group">
			
					<?php foreach ($projects as $row):?>
					<?php if($row != null):?>
					<taskTickets> <a
							href="<?php echo site_url()?>/Task/manage_task/<?php echo $row->task_id?>"
							style="background-color: <?php echo $row->task_color?> ;"
							type="button" class="btn btn-default"><?php echo $row->task_name?></a>
			</taskTickets>
					<?php endif;?>
					<?php endforeach;?>
					<?php if($row == null):?>
					<div class="col-md-10 col-md-offset-1">
				<div class="alert alert-info text-center" role="alert">
					<p class="alert-link">You don't have any tasks under this project!</p>
				</div>
			</div>
					<?php endif;?>
	</div>

	</div>
</div>


