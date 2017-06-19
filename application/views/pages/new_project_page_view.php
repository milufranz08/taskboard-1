
<div class="container">
<form data-validate="parsley" method="post" accept-charset="utf-8"
	name="newprojectform" id="form" > <!-- TODO: add action = "..." -->
<div class="row">
<div class="col-6 col-md-2">
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
  	</select>
    </div>
</div>
<div class="row">
<div class="col-6 col-md-2">
</div>
	<div class="col-6 col-md-4">
	<div class="form-group">
    	<label for="Textarea">Description</label>
    	<textarea class="form-control" name="project_desc" id="project_desc" rows="5" required></textarea>
  	</div>
	</div>
	<div class="col-6 col-md-2"><br><br><br><br><br>
		<input type="submit" name="submit" value="Create Project" class="button-link" onclick="myFunction();">
	</div>
</div>	
</form>
</div>