<?php
	include_once 'header.php';
?>
<article>
<div class="row content">
	<div class="col-sm-3 sidenav">
		<section><hr>
			<div class="well">
				<p><a href="index.php">Home</a><p>
			</div><br>
		</section>
	</div>

	<div class="col-sm-6">
	<!--<fieldset><section><div class="aside"><hr>-->
		<section>
			<hr><h3 class="third" style="text-align:center"><em>Sign Up</em></h3><hr>
			<!--<h2 class="text-center"; id ="signup"; class="second";>Sign Up</h2>-->
			<form class="form-horizontal" action="signup.inc.php" method="POST" id="signupform">
			<!-- <form class="signup-form" action = "includes/signup.inc.php" method="post"> action="" id="signupForm" onsubmit="return validate();"> -->
				<div class="form-group">
					<label class="control-label col-sm-3" for="Firstname">First Name:</label>
					<div class="col-sm-7">
						<input type="text" id="fname" name="fname" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="Lastname">Last Name:</label>
					<div class="col-sm-7">
						<input type="text" id="lname" name="lname" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="Username">Username:</label>
					<div class="col-sm-7">
						<input type="text" id="u_name" name="u_name" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label color:black; col-sm-3" for="Password" >Password:</label>
					<div class="col-sm-7">
						<input type="password" id="u_pass" name="u_pass" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4">
						<select class="form-control; cmb" style="height: 20px; width: auto;" name="role" id="role">
							<option value="Role" selected>Role</option>			
							<option value="Regular User">Regular User</option>
							<option value="Admin">Admin</option>
						</select>
					</div>
				</div>
				<div class="center">
					<!--<input type="submit" value ="submit" name="submit"/>-->
					<button type="submit" name="submit">Sign up</button>
					<input type="reset">
				</div>
			
						
		</form><br>
	</div></section>
	<div class="col-sm-3 sidenav"></div>
</div>
</article><br>
<?php
	include_once 'footer.php';
?>