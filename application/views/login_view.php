<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('VerifyLogin'); ?>
      <label for="username">Username:</label>
      <input type="text" size="20" id="username" name="username"/>
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="passowrd" name="password"/>
      <br/>
      <input type="submit" value="Login"/>
    </form>
  </body>
</html>
