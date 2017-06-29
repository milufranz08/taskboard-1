<?php foreach($results as $row){
$user_id = $row->user_id;
}?>
<?php foreach($projects as $row1) {
$project_id = $row1->project_id;
$created_by = $row1->project_created_by;
$project_name = $row1->project_name;
$team_lead_status = $row->team_lead_status;
}
?>

<h1 align="center"><?php echo $project_name?></h1>
<br><br>
<div class='container-fluid'>
  <div class='row-fluid'>
  <?php if ($user_id == $created_by) : ?> 
  <div class="span4 offset4 text-center">
    <a href="<?php echo site_url()?>/Project/edit_project/<?php echo $project_id?>" class="btn btn-info" role="button">Manage Project</a>
  </div>
  <?php endif; ?>
  </div>
 <div class="container">
 
<br><br>
<div  class="secondary_nav">
<a href="<?php echo site_url()?>/Site/newTask/<?php echo $user_id?>" class="btn btn-info" role="button">New Task</a>
<?php if ($team_lead_status === 'Y') :?>
<a href="<?php echo site_url().'/Site/newProject';?>" class="btn btn-info" role="button">New Project</a>
<?php endif; ?>
  </div>
  

  <div class="row">  
<div class="col-6 col-md-2 center-block">
  <div class="asideTop">
<h4>Completed Tasks</h4>
<p><a href="<?php echo site_url()?>/Complete">View All</a></p>
 
<?php $i = 0;?>
<?php foreach ($tasks as $row):?>
<?php if($row->task_status == "3"):?>
<?php if($i++ < 5):?>
<taskTickets>
<a href="<?php echo site_url()?>/Task/completed_tasks/<?php echo $row->task_id?>"
	type="button" class="btn btn-link"><?php echo $row->task_name?></a>
</taskTickets>
<?php endif;?>
<?php endif;?>
<?php endforeach;?>
</div>
 
</div>
 
  <div class="col-6 col-md-10">
  <sectionTop>
<h4 class="bold">In Progress</h4>
<taskTickets>
<?php $b = 0;?>
<?php foreach ($tasks as $row1):?>
<?php if($row1->task_status == "2"):?>
<?php $b++;?>
 
<div class="btn-group" role="group">
<a
href="<?php echo site_url()?>/Task/manage_task/<?php echo $row1->task_id?>"
style="background-color: <?php echo $row1->task_color?>;"
type="button" class="btn btn-default"><?php echo $row1->task_name?></a>
</div>
<?php endif;?>
<?php endforeach;?>
<?php if($b == 0):?>
<div class="col-md-10 col-md-offset-1">
<div class="alert alert-info text-center" role="alert">
  <p class="alert-link">You haven't started any task yet!</p>
</div>
</div>
<?php endif;?>
</taskTickets>
</sectionTop><br><br><br><br>
 
<sectionBottom>
<h4 class="bold">Not Started</h4>
<taskTickets>
<?php $a = 0;?>
<?php foreach ($tasks as $row2):?>
<?php if($row2->task_status == "1"):?>
<?php $a++;?>
 
<div class="btn-group" role="group">
<a
href="<?php echo site_url()?>/Task/manage_task/<?php echo $row2->task_id?>"
style="background-color: <?php echo $row2->task_color?> ;"
type="button" class="btn btn-default"><?php echo $row2->task_name?></a>
</div>
 
<?php endif;?>
<?php endforeach;?>
<?php if($a == 0):?>
<div class="col-md-10 col-md-offset-1">
<div class="alert alert-info text-center" role="alert">
  <p class="alert-link">You have started all your tasks!</p>
</div>
</div>
<?php endif;?>
</taskTickets>
</sectionBottom>
</div>
 
</div>
  </div>
  </div>