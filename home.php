<?php
session_start();
if (!isset($_SESSION['email'])){
	header('location:login.php');
	}
?>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<a href="logout.php" class="float-right">Logout</a>
<h1>Thank you for visiting my page</h1>
</div>
</body>
</html>