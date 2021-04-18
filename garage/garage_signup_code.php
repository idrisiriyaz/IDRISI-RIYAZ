<?php
include("DBconfig.php");

if(isset($_POST['garage_sign_up'])){

	$gname = htmlentities(mysqli_real_escape_string($conn, $_POST['garage_name']));
	$gemail = htmlentities(mysqli_real_escape_string($conn, $_POST['garage_email']));
	$gphoneno = htmlentities(mysqli_real_escape_string($conn, $_POST['garage_phoneno']));
	$gpass= htmlentities(mysqli_real_escape_string($conn, $_POST['garage_pass']));
	$gadd= htmlentities(mysqli_real_escape_string($conn, $_POST['garage_add']));
	foreach($_POST['locations'] as $loc)
	{
		$location = htmlentities(mysqli_real_escape_string($conn, $loc));
	}
	if ($gname == '') {

		echo "<script>alert('Please enter garage name')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if ($gemail == '') {

		echo "<script>alert('Please enter garage email')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if ($gphoneno == '') {

		echo "<script>alert('Please enter phoneno')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if ($gpass == '') {

		echo "<script>alert('Please enter your password')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
    }
    if ($gadd == '') {

		echo "<script>alert('Please enter garage address')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	if (strlen($gpass)<8) {

		echo "<script>alert('password should be minimum 8 characters')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}
	

	$check_email= "select * from garage_signup where garage_email='$gemail'";
	$run_email=mysqli_query($conn, $check_email);

	$check = mysqli_num_rows($run_email);

	if($check==1){
		echo "<script>alert('Email already exist')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}

	$insert = "insert into garage_signup (garage_name, garage_email, garage_phoneno, garage_pass, garage_add, location) values('$gname', '$gemail', '$gphoneno', '$gpass','$gadd', '$location')";

	$query= mysqli_query($conn, $insert);

	if ($query) {
		echo"<script>alert('Congratulations $gname, your account has been created successfully Login in to continue')</script>";
		

		echo"<script> window.open('http://localhost/services/', '_self')</script>";

	}
	else{
		echo"<script>alert('Registration failed, try again')</script>";
		echo"<script> window.open('index.php', '_self')</script>";
	}

}
?>