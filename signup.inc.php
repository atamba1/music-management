<?php
session_start();
	if(isset($_POST['submit'])) //if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		include_once 'db.inc.php';
		// Connect to MySQL DBMS
		if (!($connection = @ mysql_connect($hostName, $username, $password)))
			showerror();
		
		if (!mysql_select_db($databaseName, $connection))
			showerror();
		
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$fname = mysqli_real_escape_string($connection, $_POST['fname']);
			$lname = mysqli_real_escape_string($connection, $_POST['lname']);
			$u_username = mysqli_real_escape_string($connection, $_POST['u_username']);
			$u_pass = mysqli_real_escape_string($connection, $_POST['u_pass']);
		} else {echo "Error 24";}
		
		//Error handlers
		
		//check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", '$first')||!preg_match("/^[a-zA-Z]*$/", '$last')){
			header("Location: signup.php?signup=invalid");
			//exit();
		} else { 
			$sql = "SELECT * FROM USER WHERE Username='$u_username'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if($resultCheck != null){
				header("Location: signup.php?signup=usertaken");
				//exit();
			} //else {
		}//new		
	/*} 
				}
			}
		}	*/	
	} else {
		header("Location: signup.php?signup=105");
	}
?>