<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>


<!DOCTYPE html>
<link href="style.css" rel="stylesheet" type="text/css">
<html>
	<head>
		<meta charset="utf-8">
		<title size = "39">TABLETIME</title>
		
		</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1 size = "39"><b>TABLETIME</b></h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h1>Your timetable</h1>
			<p>content stream and panels coming, <?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?>!</p>
		</div>
	</body>
</html>

