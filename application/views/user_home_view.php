 <!DOCTYPE html>
	<?php foreach($results as $row){
		if (array_key_exists('username', $row)) {
			$username = $row->username;
			$user_id = $row->user_id;
		}
		else {
			$username = $row->email;
		}
	}?>
<html>
 <body> 
 	<div class="container">

		<div  id="body_cont">
			<h1>Welcome <?php echo $username; ?>!</h1>
			
			<div  id="secondary_nav">
				<a href="<?php echo site_url()?>/Site/newTask/<?php echo $user_id?>" class="btn btn-info" role="button">New Task</a>
				<a href="<?php echo site_url().'/Site/newProject';?>" class="btn btn-info" role="button">New Project</a>
			</div>
		</div>
	
			
	<div class="container-fluid">
  		<div class="row-fluid">
    			<div class="span2">
  				<asideTop>
					<h4><a href="completeTasks">Completed Tasks</a></h4>
				</asideTop>
				<asideBottom>
					<h4><a href="projects">Projects</a></h4>
				</asideBottom>
			</div>
  			<div class="span10">
  				<sectionTop>
					<h4>In Progress</h4>
					<taskTickets>
<!-- 						<div class="btn-group btn-group-justified" role="group" aria-label="..."> -->
<!--   							<div class="btn-group" role="group"> -->
<!--     								<button type="button" class="btn btn-default">Left</button> -->
<!--   							</div> -->
<!--   							<div class="btn-group" role="group"> -->
<!--     								<button type="button" class="btn btn-default">Middle</button> -->
<!--   							</div> -->
<!--   							<div class="btn-group" role="group"> -->
<!--     								<button type="button" class="btn btn-default">Right</button> -->
<!--   							</div> -->
<!-- 						</div> -->

						<?php
						$dbhost = 'www.franklinpracticum.com';
						$dbuser = 'frank73_s17task';
						$dbpass = 'Task.s17';
						$dbname = 'frank73_s17task';

						// Create connection
						$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
						
						// Check connection
						if (!$conn) {
    							die("Connection failed: " . mysql_error());
						} 
						
						$sql = 'SELECT task_name, task_status FROM tasks ORDER BY task_id';
						//$sql = 'SELECT task_name, task_status FROM tasks';
						$result = $conn->query($sql);
						
			
						if ($result->num_rows > 0) {
    						// output data of each row
				
    							while($row = $result->fetch_assoc()) {
    								echo "<td> <a href='<?php echo site_url()?>/Task/manage_task/<?php'"."' >" . $row['task_name'] . "<a/> </td>";
        							//echo "Task#: " . $row["task_id"]. " - To do: " . $row["task_name"]. " " ."<br>";
    							}
						} else {
    								echo "0 results";
						}
						
						$conn->close();
						?>

					</taskTickets>
				</sectionTop>
				<sectionBottom>
							<h4>Not Started</h4>
<!-- 							<div class="btn-group btn-group-justified" role="group" aria-label="..."> -->
<!--   								<div class="btn-group" role="group"> -->
<!--     									<button type="button" class="btn btn-default">Left</button> -->
<!--   								</div> -->
<!--   								<div class="btn-group" role="group"> -->
<!--     									<button type="button" class="btn btn-default">Middle</button> -->
<!--   								</div> -->
<!--   									<div class="btn-group" role="group"> -->
<!--     									<button type="button" class="btn btn-default">Right</button> -->
<!--   								</div> -->
<!-- 							</div> -->
				</sectionBottom>	
			</div>
  		</div>
	</div>
	</div>
</body>