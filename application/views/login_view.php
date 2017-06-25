<!DOCTYPE html>
<html>
  <script type="text/javascript">
  function redirect()
  {
    window.location.href="NewUser";
  }
  </script>
  <head>
    <title>Login</title>
  </head>
  <body>
  <div class='container-fluid'>
  <div class='row-fluid'>
  <div class="span4 offset4 text-center">
    <h1>Login</h1>
  </div>
  </div>
  <div class='row-fluid'>
  <div class="span4 offset4 text-center">
    <?php
    	if (isset ($_SESSION['Error'])) {
    		echo $_SESSION['Error'];
    	}
    ?>
  </div>
  </div>
    <br>
    <br>
  <div class='row-fluid'>
  <div class="span4 offset4 text-center">
    <?php echo form_open('Login/verify_login'); ?>
      <label for="username">Username:</label>
      <input type="text" size="20" id="username" name="username"/>
  </div>
  </div>
      <br/>
  <div class='row-fluid'>
  <div class="span4 offset4 text-center">
      <label for="password">Password:</label>
      <input type="password" size="20" id="password" name="password"/>
  </div> 
  </div>
      <br/>
  <div class='row-fluid'>
  <div class="span4 offset4 text-center">
      <input type="submit" value="  Login  "/>
  </div>
  </div>
  <div class='row-fluid'>
  <div class="span4 offset4 text-center">
      <input type="button" value=" Register " onclick="redirect();"/>
    </form>
  </div>
  </div>
  </div>
  </body>
</html>
