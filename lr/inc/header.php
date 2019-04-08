<?php
	$filepath = realpath(dirname(__FILE__));
	include_once $filepath.'/../lib/Session.php';
	Session::init(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Register System PHP</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script src="inc/jquery.min.js"></script>
	<script src="inc/bootstrap.min.js"></script>
</head>
<?php
	if (isset($_GET['action']) && $_GET['action'] == 'logout') 
	{
		Session::destroy();
	}
?>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Welcome to my Login Register System PHP & PDO</a>
				</div>
				<ul class="nav navbar-nav pull-right">
					
					<?php
						$id = Session::get("id");
						$userLogin = Session::get("login");
						if ($userLogin == true)
						{
					?>							
							<li><a href="index.php">Home</a></li>
							<li><a href="profile.php?id=<?php echo $id;?>">Profile</a></li>
							<li><a href="?action=logout">Logout</a></li>
					<?php
						}
						else
						{
					?>
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
					<?php
						}
					?>
				</ul>
			</div>
		</nav>