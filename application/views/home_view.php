<!DOCTYPE html>
	<?php foreach($results as $row){
		$username = $row->username;
	}?>
<html>
 <head>
   <title>Home</title>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
   <a href="home/logout">Logout</a>
 </body>
</html>
