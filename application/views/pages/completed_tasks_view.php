

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
<?php foreach($tasks as $row1)
{
	$task_id = $row1->task_id;
	$task_name = $row1->task_name;
	$task_description = $row1->task_description;
	$task_notes = $row1->task_notes;
	$task_project = $row1->task_project;
	$task_assigned_to = $row1->task_assigned_to;
	$task_timestamp = $row1->task_timestamp;
	$task_status = $row1->task_status;
	$task_created_by = $row1->task_created_by;
}?>


<div class="container">
<form enctype="multipart/form-data" data-validate="parsley" method = "post" accept-charset="utf-8" 
	name="taskForm" id="form" action="<?php echo site_url()?>/Task/update_task/<?php echo $task_id ?>">
<div class="row">
<div class="col-6 col-md-2">
</div>
  <div class="col-6 col-md-4">
    <div class="form-group">
    	<label for="task_name">Task Name</label>
   		<input readonly="type="tname" name="task_name" class="form-control" value="<?php echo $task_name?>"" required>
  	</div>
  	<div class="form-group">
    	<label for="Textarea">Description</label>
    	<textarea readonly="class="form-control" name="task_desc" id="task_desc" rows="3"" required><?php echo $task_description?></textarea>
  	</div>
  	<div class="form-group">
    	<label for="Textarea">Notes</label>
    	<textarea readonly="class="form-control" name="task_notes" id="task_notes"  rows="3">" <?php echo $task_notes?> </textarea>
 	</div>
  </div>
  <div class="col-6 col-md-2">
    
    <label>Project</label><br>
    <select class="form-control" id="inlineFormCustomSelect" name="task_project" disabled>
  	<option selected value="<?php echo $task_project ?>"><?php echo $project_name ?></option>
  	<?php 	foreach($project as $row1) {
  				echo"<option name='task_project' id='task_project' value='";
				echo "$row1->project_id";
				echo"'>";
  				echo"$row1->project_name";
  				echo"</option>";
  			}?>
  	</select><br>
				<br>
				<input type="hidden" name="timestamp" id="timestamp">
				<input type="hidden" name="task_completed" id="task_completed">
				<input type="hidden" name="status" id="status" value="<?php echo $task_status?>">
  </div>
    <div class="col-6 col-md-2">
  	<?php if($team_lead_status == 'Y'):?>
  	  	<label>Task Assigned To</label>
  	  	<select class="form-control" id="inlineFormCustomSelect" name="task_assigned_to" disabled>
  		<option selected value="<?php echo $task_assigned_to?>"><?php echo $user_name ?></option>
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
  	</select><br><br><br>
  		<input type="submit" name="submit" value="Start Task" class="button" onclick="myFunction1()" disabled><br><br><br>
  		<input type="submit" name="submit" value="Update Task" class="button" disabled><br><br><br>
  		<input type="submit" name="submit" value="Complete Task" class="button" onclick="myFunction3()" disabled>
  	</div>
</div>
</form>
</div>
<br>
	<script type="text/javascript">
	function myFunction1()
	{
       	document.getElementById("status").value = "2";
	}
	function myFunction3()
	{
		document.getElementById("status").value= "3";
		document.getElementById("task_completed").value= new Date();
		
	}
   		document.getElementById("timestamp").value= new Date();
	</script>