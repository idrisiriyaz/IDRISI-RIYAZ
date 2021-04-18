<?php
include("DBconfig.php");

if(isset($_POST['sign_up'])){

	$name = htmlentities(mysqli_real_escape_string($conn, $_POST['user_name']));
	$email = htmlentities(mysqli_real_escape_string($conn, $_POST['user_email']));
	$phoneno = htmlentities(mysqli_real_escape_string($conn, $_POST['user_phoneno']));
	$pass= htmlentities(mysqli_real_escape_string($conn, $_POST['user_pass']));

	if ($name == '') {

		echo "<script>alert('Please enter your name')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if ($email == '') {

		echo "<script>alert('Please enter your email')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if ($phoneno == '') {

		echo "<script>alert('Please enter your phoneno')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if ($pass == '') {

		echo "<script>alert('Please enter your password')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if (strlen($pass)<8) {

		echo "<script>alert('password should be minimum 8 characters')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	

	$check_email= "select * from user_signup where user_email='$email'";
	$run_email=mysqli_query($conn, $check_email);

	$check = mysqli_num_rows($run_email);

	if($check==1){
		echo "<script>alert('Email already exist')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}

	$insert = "insert into user_signup (user_name, user_email, user_phoneno, user_pass) values('$name', '$email', '$phoneno', '$pass')";

	$query= mysqli_query($conn, $insert);

	if ($query) {
		echo"<script>alert('Congratulations $name, your account has been created successfully login to continue')</script>";
		

		echo"<script> window.open('index.php', '_self')</script>";

	}
	else{
		echo"<script>alert('Registration failed, try again')</script>";
		echo"<script> window.open('index.php', '_self')</script>";
	}

}
?>