<?php
	include_once 'header.php';
//CoreCourses(cType, cNum, cName, cCredits, coreNum, required)

?>
<!DOCTYPE html>
	<article>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Artist"><em>Artist<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Artist First Name</th><th>Artist Last Name</th><th>Artist ID</th><th>
					Debut</th><th>Contract ID</th><th>Birthday</th><th>Hometown</th><th>Sales</th>
					<th>Number of Songs</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM ARTIST";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["artist_id"]}</td><td>{$row["debut"]}</td>
							<td>{$row["contract_id"]}</td><td>{$row["bdate"]}</td><td>{$row["hometown"]}</td>
							<td>{$row["sales"]}</td><td>{$row["no_of_songs"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="User"><em>User<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>User First Name</th><th>User Last Name</th><th>Username</th><th>
					User Password</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM USER";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["u_username"]}</td><td>{$row["u_pass"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Producer"><em>Producer<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Producer First Name</th><th>Producer Last Name</th><th>Producer ID</th>
					<th>Birthday</th><th>Awards</th><th>Hometown</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM PRODUCER";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["p_id"]}</td>
							<td>{$row["bdate"]}</td><td>{$row["awards"]}</td><td>{$row["hometown"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Composer"><em>Composer<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Composer First Name</th><th>Composer Last Name</th><th>Composer ID</th>
					<th>Birthday</th><th>Awards</th><th>Hometown</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM COMPOSER";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["comp_id"]}</td>
							<td>{$row["bdate"]}</td><td>{$row["awards"]}</td><td>{$row["hometown"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Record Label"><em>Record Label<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Record Label Name</th><th>Year Started</th><th>
					Artist ID</th><th>Founder</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM RECORD_LABEL";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["rl_name"]}</td><td>{$row["year_started"]}</td><td>{$row["artists_id"]}</td>
							<td>{$row["founder"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Song"><em>Song<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Song Title</th><th>Artist Name</th><th>Album</th>
					<th>Year Released</th><th>Length</th><th>Genre</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM SONG";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["title"]}</td><td>{$row["artist_name"]}</td>
							<td>{$row["album"]}</td><td>{$row["year_released"]}</td><td>{$row["length"]}</td>
							<td>{$row["genre"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Songwriters"><em>Songwriters<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Songwriter First Name</th><th>Songwriter Last Name</th>
					<th>Songwriter ID</th><th>Birthday</th><th>Awards</th><th>Hometown</th><th>Hit Records</th>
					</tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM SONGWRITERS";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["s_id"]}</td>
							<td>{$row["bdate"]}</td><td>{$row["awards"]}</td><td>{$row["hometown"]}</td>
							<td>{$row["hit_records"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Album"><em>Album<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Album Name</th><th>Debut</th><th>
					Number of Songs</th><th>Genre</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM ALBUM";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["al_name"]}</td><td>{$row["debut"]}</td><td>{$row["no_of_songs"]}</td>
							<td>{$row["genre"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Genre"><em>Genre<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Genre Name</th><th>Top Artists</th><th>
					Parent Genre</th><th>Typical Instruments</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM GENRE";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["gname"]}</td><td>{$row["top_artists"]}</td><td>{$row["parent_genre"]}</td>
							<td>{$row["typical_instruments"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Publisher"><em>Publisher<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Publisher Name</th><th>Headquarters</th><th>
					CEO</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM PUBLISHER";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["publ_name"]}</td><td>{$row["headquarters"]}</td><td>{$row["ceo"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Awards"><em>Awards<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Latest Winner</th><th>Last Five Winners</th><th>
					First Winner</th><th>Artist ID</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM AWARDS";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["latest_winner"]}</td><td>{$row["last_five_winners"]}</td>
							<td>{$row["first_winner"]}</td><td>{$row["artist_id"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Repository"><em>Repository<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Invoice</th><th>Price</th><th>
					Sales Per Year</th><th>Song Title</th><th>Artist Name</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM REPOSITORY";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["invoice"]}</td><td>{$row["price"]}</td><td>{$row["sales_per_year"]}</td>
							<td>{$row["song_title"]}</td><td>{$row["artist_name"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Music Video"><em>Music Video<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Video Title</th><th>Director</th><th>
					Videographer</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM MUSIC_VIDEO";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["title"]}</td><td>{$row["director"]}</td><td>{$row["videographer"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Director"><em>Director<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Director First Name</th><th>Director Last Name</th><th>Director ID</th>
					<th>Videos Directed</th><th>Awards</th><th>Hometown</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM DIRECTOR";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["d_id"]}</td>
							<td>{$row["videos_worked_on"]}</td><td>{$row["awards"]}</td><td>{$row["hometown"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Choreographer"><em>Choreographer<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Choreographer First Name</th><th>Choreographer Last Name</th><th>Choreographer ID</th>
					<th>Videos Choreographed</th><th>Awards</th><th>Hometown</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM CHOREOGRAPHER";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td><td>{$row["choreo_id"]}</td>
							<td>{$row["videos_worked_on"]}</td><td>{$row["awards"]}</td><td>{$row["hometown"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Admins"><em>Admins<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Admin First Name</th><th>Admin Last Name</th>
					<th>Admin Username</th><th>Admin Password</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM ADMINS";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["fname"]}</td><td>{$row["lname"]}</td>
							<td>{$row["ad_username"]}</td><td>{$row["ad_pass"]}</td>
							</tr>";
					?>
					</table>
		</div>
		<div class="row content">
					<hr><h3 class="third" style="text-align:center" id ="Admins"><em>Playlist<em></h3>
					<table border=1 style="text-align:left" style="background-color:white">
					<thead><tr><th>Playlist Name</th><th>Playlist ID</th></tr></thead>
					<?php
						include_once 'db.inc.php';
						// Connect to MySQL DBMS
						if (!($connection = @ mysql_connect($hostName, $username, $password)))
							showerror();
						// Use the cars database
						if (!mysql_select_db($databaseName, $connection))
							showerror();
						 
						// Create SQL statement
						$query = "SELECT * FROM ADMINS";
						// Execute SQL statement
						if (!($result = @ mysql_query ($query, $connection)))
						  showerror();
						// Display results
						while ($row = @ mysql_fetch_array($result))
							echo "<tr><td>{$row["playlist_name"]}</td><td>{$row["playlist_id"]}</td>
							</tr>";
					?>
					</table>
		</div>
	</article><br>
<?php
	include_once 'footer.php';
?>