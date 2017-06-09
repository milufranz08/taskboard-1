<!DOCTYPE html>
<html>
  <head>
    <title>Create Account</title>
  </head>
  <body>
    <h1>Create Account</h1>
    <?php
    	if (isset ($_SESSION['Error'])) {
    		echo $_SESSION['Error']; 
    	}
    ?>
    <br>
    <br>
    <?php echo form_open('CreateUser'); ?>
      <label for="firstname">Firstname:</label>
      <input type="text" size="20" id="firstname" name="firstname"/>
      <br/>
      <label for="lastname">Lastname:</label>
      <input type="text" size="20" id="lastname" name="lastname"/>
      <br/>
      <label for="email">Email:</label>
      <input type="text" size="20" id="email" name="email"/>
      <br/>
      <label for="username">Username:</label>
      <input type="text" size="20" id="username" name="username"/>
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="passowrd" name="password"/>
      <br/>
      <input type="submit" value="Make Account"/> 
    </form>
  </body>
</html>
