
<?php foreach($project as $row) {
		$project_id = $row->project_id;
}
?>	

<h1 align="center">All Tasks to the Project</h1>
<br><br>
<div class='container-fluid'>
  <div class='row-fluid'>
  <div class="span4 offset4 text-center">
    <a href="<?php echo site_url()?>/Project/edit_project/<?php echo $project_id?>" class="btn btn-info" role="button">Manage Project</a>
  </div>
  </div>
</div>


