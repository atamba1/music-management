<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $u_username = mysqli_real_escape_string($db,$_POST['u_username']);
      $u_password = mysqli_real_escape_string($db,$_POST['u_pass']); 
      
      $query = "SELECT u_username FROM USER WHERE u_username = '$u_username' and u_pass = '$u_pass'";
      $result = mysqli_query($db,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("u_username");
         $_SESSION['login_user'] = $u_username;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Music Database</title>
	<link rel="stylesheet" type="text/css" href="music.css">
</head>
<body>

	<!--HEADER-->
	<header id="main-header">
		<div class="container">
			<h1>NAS Music Database</h1>
		</div>
	</header>

	<!--SEARCH BAR-->
	<nav id="search-bar">
			<div class="form-group">
				<label>Search for: </label>
				<input type="Search" name="Search">
			</div>

			<!--navbar-->
			<div class="navbar">
				<ul>
					<li><a href="Main.html">Home</a></li>
					<li><a href="music.html">Artist</a></li>
					<li><a href="genres.html">Genre</a></li>
					<li><a href="#">Label</a></li>
					<li><a href="#">Most Popular</a></li>
				</ul>
			</div>
	</nav>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
			Don't have an account? <a href="#">Sign Up!</a>	
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Username:</label><input type = "text" name = "username" class = "box"/><br/><br />
				  <label>Password:</label><input type = "password" name = "password" class = "box"/><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>