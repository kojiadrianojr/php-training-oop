<?php include '../action/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php'; ?>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="../css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<nav>
		<ul class="nav nav-tabs nav justify-content-start">
			<li class="nav-item nav" >
				<a class="navbar-brand" href="#">ICON</a>
			</li>
			<li class="nav-item nav">
				<h2><?php echo $row['fullname']; ?><h2>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">PATIENTS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">USER</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../action/logout.php">Logout</a>
			</li>
		</ul>
	</nav>

	<div class="container" style="background-color: blue;">	
		<?php include 'includes/home-carousel.php' ?>
	</div>
	<div class="container" style="background-color: orange;"></div>
</body>
</html>