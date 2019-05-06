<?php
   include('session.php');
?>
<!DOCTYPE html>
   <head>
      <title>Welcome </title>
	  <link rel="stylesheet" type="text/css" href="main.css">
   </head>
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
</html>