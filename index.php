<?php
// Username is root
$user = 'root';
$password = '';
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AIRPORT MANAGEMENT</title>
</head>
<body>
	<header>
		<div class = "main">
		</div>
		<div class="title">
			<h1>AIRPORT MANAGEMENT</h1>
		</div>
		<div class = "button">
			<a href="login1.php" class="btn">&nbsp SIGN IN AS ADMIN &nbsp </a>
		</div>
	</header>
</body>
<style>
	*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}

header{
	background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(index.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}


.main{
	max-width: 1200px;
	margin: auto;
}

.title{
	position: absolute;
	top:  50%;
	left:  50%;
	transform: translate(-50%, -50%);
}

.title h1{
	color:  #fff;
	font-size: 70px;
}


.button{
	position: absolute;
	top:  70%;
	left:  50%;
	transform: translate(-50%, -50%);
}

.btn{
	border: 1px solid #fff;
	padding:  10px 30px;
	color:  #fff;
	text-decoration: none;
	margin-right: 20px;
	transition: 0.6s ease;
}

.btn:hover{
	background-color: #fff;
	color: #000;
}
</style>
</html>