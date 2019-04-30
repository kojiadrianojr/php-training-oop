<!DOCTYPE html>
<html>
<head>
	<title>Dr. Ianne Pediatric-CLINIC | Login </title>
	<?php include '../links/link.php'; ?>
</head>
<body>
	<div class="container login-container" style="width: 30%;">
		<div class="login-form-1">
			<h3>Welcome, Doc!</h3>
			<div class="container" style="width: 25%; border: 1px solid black;">
				
			</div>
			<form>
				<div class="form-group ">
					<label for="username">Username: </label>
					<input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off">
					<small id="usernamehelp" class="form-text text-muted">A warm welcome for you, user.</small>
				</div>
				<div class="form-group">
    				<label for="Password">Password: </label>
    				<input type="password" class="form-control" id="Password" placeholder="Password">
  				</div>
  					<button type="submit" class="btn btnSubmit">Login</button>
			</form>
		</div>
	</div>
	



	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="../css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>