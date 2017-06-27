<?php foreach($results as $row){
		$user_id = $row->user_id;
}?>
<?php foreach($projects as $row1) {
		$project_id = $row1->project_id;
		$created_by = $row1->project_created_by;
		$project_name = $row1->project_name;
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
</div>


