<!DOCTYPE html>
	<?php foreach($results as $row){
		if (array_key_exists('username', $row)) {
			$username = $row->username;
		}
		else {
			$username = $row->email;
		}
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
