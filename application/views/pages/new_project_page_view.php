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
<div class="container">
<div class="span4 offset4 text-center">
	<h1>New Project</h1>
</div>
<form data-validate="parsley" method="post" accept-charset="utf-8"
	name="newprojectform" id="form" action="<?php echo site_url()?>/Project/submit_project">
	<input type="hidden" name="project_created_by" id="project_created_by" value="<?php echo $user_id?>">
<div class="row">
<div class="col-6 col-md-3">
</div>
	<div class="col-6 col-md-4">
	<div class="form-group">
		<label for="project_name">Project Name</label>
		<input type="text" name="project_name" class="form-control" required>
	</div>
	</div>
	<div class="col-6 col-md-2">
    <label>Color</label>
  	<select class="form-control" id="inlineFormCustomSelect" name="color_id" required>
  	<option value="">Pick a color</option>
  	
  	<?php foreach($color as $row1):?> 
  		<?php if($row1->color_name != 'Gray'):?>
  				<option name='color_id' id='color_id' value='<?php echo $row1->color_id ?>'><?php echo $row1->color_name ?></option>
  		<?php endif;?>
  	<?php endforeach;?>
  	</select>
    </div>
</div>
<div class="row">
<div class="col-6 col-md-3">
</div>
	<div class="col-6 col-md-4">
	<div class="form-group">
    	<label for="Textarea">Description</label>
    	<textarea class="form-control" name="project_desc" id="project_desc" rows="5" required></textarea>
  	</div>
	</div>
	<div class="col-6 col-md-2"><br><br><br><br><br>
		<input type="submit" name="submit" value="Create Project" class="button-link">
	</div>
</div>	
</form>
</div>
</body>