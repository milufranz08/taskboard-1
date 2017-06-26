
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
<form data-validate="parsley" method = "post" accept-charset="utf-8" 
	name="taskForm" id="form" action="<?php echo site_url()?>/Task/submit_task">
<div class="row">
<div class="col-6 col-md-2">
</div>
  <div class="col-6 col-md-4">
    <div class="form-group">
    	<label for="task_name">Task Name</label>
   		<input type="tname" name="task_name" class="form-control" required>
  	</div>
  	<div class="form-group">
    	<label for="Textarea">Description</label>
    	<textarea class="form-control" name="task_desc" id="task_desc" rows="3" required></textarea>
  	</div>
  	<div class="form-group">
    	<label for="Textarea">Notes</label>
    	<textarea class="form-control" name="task_notes" id="task_notes" rows="3"></textarea>
 	</div>
  </div>
  <div class="col-6 col-md-2">
    <label>Select a Project</label><br>
  	<select class="form-control" id="inlineFormCustomSelect" name="task_project" required>
  	<option value="">Choose Project</option>
  	<?php 	foreach($project as $row1):?> {
  				<option name='task_project' id='task_project' value='<?php echo $row1->project_id?>'><?php echo $row1->project_name?> </option>
  	<?php endforeach;?>
  	</select><br>
				<input type="hidden" name="timestamp" id="timestamp">
				<input type="hidden" name="task_created_by" id="task_created_by" value="<?php echo $user_id?>">

  </div>
    <div class="col-6 col-md-2">
    	<?php if($team_lead_status == 'Y'):?>
  	<label>Assigned To</label><br>
  	<select class="form-control" id="inlineFormCustomSelect" name="task_assigned_to" required>
  		<option value="">Choose Assignee</option>
  	<?php 	foreach($users as $row3):?>
  					<?php if($row3->team_leader_id == $user_id):?>
						<option name="task_assigned_to" id="task_assigned_to" value="<?php echo $row3->user_id; ?>">
						<?php echo $row3->first_name;
						echo " ";
						echo $row3->last_name;?>
  						</option>
  					<?php endif;?>
  	<?php endforeach;?>
  	<?php endif;?>
  	</select>
  	<?php if ($team_lead_status == 'N'):?>
  	 <input type="hidden" name="task_assigned_to" id="task_assigned_to" value="<?php echo $user_id; ?>">
  	<?php endif;?>
  	<br><br><br><br><br><br><br><br><br><br><br><br>
  	 <input type="submit" name="submit" value="Create Task" class="button-link" onclick="myFunction();">
  	</div>
</div>
</form>
</div>
<br>
	<script type="text/javascript">

       	document.getElementById("timestamp").value= new Date();

	</script>
