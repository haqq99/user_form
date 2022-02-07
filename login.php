<!DOCTYPE HTML>
<html lang='eng'>
<head>
	<title>Login/SignUp</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="log-box">
	<div class="row">
	<div class="col-md-6 login-form">
	<h2>Login</h2>
	<form action="validation.php" method="post">
		<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" required>
		</div>
		<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
		<div class="col-md-6 signup-form">
		<h2>SignUp</h2>
		<form action="register.php" method="post">
		<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" required>
		</div>
		<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">SignUp</button>
		</form>
		</div>


	</div>
</div>



</body>
</html>