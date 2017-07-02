<?php foreach ( $results as $row ) {
		$user_id = $row->user_id;
} ?>
<head>
<title>User Registration</title>
</head>
<body>
	<div class='container-fluid'>
		<div class='row-fluid'>
			<div class='span4 offset4 text-center'>
				<h1>User Registration</h1>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span4 offset4 text-center'>
    <?php
				if (isset ( $_SESSION ['Error'] )) {
					echo $_SESSION ['Error'];
				}
				?>
  </div>
		</div>
		<br> <br>
    <?php echo form_open('NewUser/create_user'); ?>
    <input type="hidden" name="team_leader_id" id="team_leader_id"
			value="<?php echo $user_id?>">
		<div class='row-fluid'>
			<div class="span4 offset4 text-center">
				<label for="firstname">Firstname:</label> <input type="text"
					size="20" id="firstname" name="firstname" />
			</div>
		</div>
		<br />
		<div class='row-fluid'>
			<div class="span4 offset4 text-center">
				<label for="lastname">Lastname:</label> <input type="text" size="20"
					id="lastname" name="lastname" />
			</div>
		</div>
		<br />
		<div class='row-fluid'>
			<div class="span4 offset4 text-center">
				<label for="email">Email Id:</label> <input type="text" size="20"
					id="email" name="email" />
			</div>
		</div>
		<br />
		<div class='row-fluid'>
			<div class="span4 offset4 text-center">
				<label for="username">Username:</label> <input type="text" size="20"
					id="username" name="username" />
			</div>
		</div>
		<br />
		<div class='row-fluid'>
			<div class="span4 offset4 text-center">
				<label for="password">Password:</label> <input type="password"
					size="20" id="passowrd" name="password" />
			</div>
		</div>
		<br />
		<div class='row-fluid'>
			<div class="span4 offset4 text-center">
				<input type="submit" value="Create User" />
			</div>
		</div>
		</form>
	</div>
</body>

