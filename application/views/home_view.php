<!DOCTYPE html>
<html>
 <head>
   <title>Home</title>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
   <a href="home/logout">Logout</a>
 </body>
</html>