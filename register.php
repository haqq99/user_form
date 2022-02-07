<?php
	session_start();
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'users_form');
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$email_id="select * from users_table where email='$email'";
	$result=mysqli_query($con,$email_id);
	
	$num=mysqli_num_rows($result);
	
	if ($num==1){
		echo "Email Already Exists, Try Logging in with this Email";
		} else{
		$reg="insert into users_table(email,password) values('$email','$pass')";
		mysqli_query($con,$reg);
		echo "Registration Successful";
		}
		
	header('refresh:2 url=login.php');
?>