<?php
	session_start();
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'users_form');
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$email_id="select * from users_table where email='$email' && password='$pass'";
	$result=mysqli_query($con,$email_id);
	
	$num=mysqli_num_rows($result);
	
	if ($num==1){
		$_SESSION['email']=$email;
		header("location:home.php");
		} else{
		header("location:login.php");
		}
		
?>