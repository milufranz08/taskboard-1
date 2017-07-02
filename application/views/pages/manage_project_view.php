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
	<h1>Manage Project</h1>
</div>
<form data-validate="parsley" method="post" accept-charset="utf-8"
	name="newprojectform" id="form" action="<?php echo site_url()?>/Project/update_project/<?php echo $project_id ?>">
	<input type="hidden" name="project_created_by" id="project_created_by" value="<?php echo $created_by?>">
<div class="row">
<div class="col-6 col-md-3">
</div>
	<div class="col-6 col-md-4">
	<div class="form-group">
		<label for="project_name">Project Name</label>
		<input type="text" name="project_name" class="form-control" value="<?php echo $project_name?>" required>
	</div>
	</div>
	<div class="col-6 col-md-2">
    <label>Color</label>
  	<select class="form-control" id="inlineFormCustomSelect" name="color_id" required>
  	<option value="">Pick a color</option>
  	<option selected value="<?php echo $color_id?>"><?php echo $color_name?></option>
  	<?php 	foreach($color as $row2) {
  				if ($row2->color_name != $color_name) {
  					echo"<option name='color_id' id='color_id' value='";
					echo "$row2->color_id";
					echo"'>";
  					echo"$row2->color_name";
  					echo"</option>";
  				}
  			}?>
  	</select>
    </div>
</div>
<div class="row">
<div class="col-6 col-md-3">
</div>
	<div class="col-6 col-md-4">
	<div class="form-group">
    	<label for="Textarea">Description</label>
    	<textarea class="form-control" name="project_desc" id="project_desc" rows="5" required><?php echo $project_desc?></textarea>
  	</div>
	</div>
	<div class="col-6 col-md-2"> <br>
	<?php if ($user_id == $created_by) : ?> 
		<!-- <input type="submit" name="complete" value="Complete Project" class="button-link"> -->
		<br><br><br><br><input type="submit" name="update" value="Update Project" class="button-link">
		<!-- <input type="submit" name="delete" value="Delete Project" class="button-link"> -->
	<?php endif; ?>
	</div>
</div>	
</form>
</div>
</body>