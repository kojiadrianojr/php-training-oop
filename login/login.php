<?php
	include '../action/login-action.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dr. Ianne Pediatric-CLINIC | Login </title>
	<?php include '../links/link.php'; ?>

</head>
<body id="logins-body">
	<div class="container login-container" style="width: 30%;">
		<div class="login-form-1">
			<h3>Welcome, Doc!</h3>
			<div class="container container-parent-center" >
				<div class="container-inside-center">
				<img src="../main/img/log-pic.png" width="20%;">
				</div>
			</div>
			<form action="" method="post">
				<div class="form-group ">
					<label for="username">Username: </label>
					<input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off">
					<small id="usernamehelp" class="form-text text-muted">A warm welcome for you, user.</small>
				</div>
				<div class="form-group">
    				<label for="Password">Password: </label>
    				<input type="password" class="form-control" id="password" placeholder="Password" name="password">
  				</div>
  					<button type="submit" class="btn btnSubmit">Login</button>
			</form>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="../css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>