<body>
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
<?php foreach($project as $row1) {
		$project_name = $row1->project_name;
		$project_desc = $row1->project_desc;
		$color_id = $row1->project_color_id;
		$created_by = $row1->project_created_by;
		$project_id = $row1->project_id;
}?>	
<?php foreach($color_by_id as $row3) {
		$color_name = $row3->color_name;
}?>
<div class="container">
<div class="span4 offset4 text-center">
	<h1><?php echo $project_name;?></h1>
</div>
<div class='row-fluid'>
<div class="span4 offset4 text-center">
	<h2>Completed</h2>
</div>
</div>

<div class="row">
<div class="col-6 col-md-3">
</div>
	<div class="col-6 col-md-4">
	<div class="form-group">
		<label for="project_name">Project Name</label>
		<input type="text" name="project_name" class="form-control" value="<?php echo $project_name?>" readonly>
	</div>
	</div>
	<div class="col-6 col-md-2">
    <label>Color</label>
	<input type="text" name="color_name" class="form-control" value="<?php echo $color_name?>" readonly>
    </div>
</div>
<div class="row">
<div class="col-6 col-md-3">
</div>
	<div class="col-6 col-md-4">
	<div class="form-group">
    	<label for="Textarea">Description</label>
    	<textarea class="form-control" name="project_desc" id="project_desc" rows="5" readonly><?php echo $project_desc?></textarea>
  	</div>
	</div>
</div>	
</div>
</body>