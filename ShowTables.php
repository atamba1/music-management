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
	<html lang="en"> 	
	<h3 class="third" style="text-align:center"><em>Tables<em></h3>
	<table border=1 style="text-align:center" style="background-color:white">
	<thead><tr><th>Table Name</th></tr></thead>
	<?php
		include_once 'db.inc.php';
		// Connect to MySQL DBMS
		if (!($connection = @ mysql_connect($hostName, $username, $password)))
			showerror();
		// Use database
		if (!mysql_select_db($databaseName, $connection))
			showerror();
		 
		// Create SQL statement
		$query = "Show tables";
		// Execute SQL statement
		if (!($result = @ mysql_query ($query, $connection)))
		  showerror();
		// Display results
		while ($row = @ mysql_fetch_array($result))
			echo "<tr><td>{$row["Tables_in_atamba1db"]}</td>
			</tr>";
	?>
	</table>
	</nav>
	</body>
</html>