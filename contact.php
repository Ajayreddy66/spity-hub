<?php
	error_reporting(0);
	$sever = "localhost";
	$username = "root";
	$password = "";
	$dbname = "data";
	$con = mysqli_connect($sever,$username,$password,$dbname);
	if(!$con)
	{
		echo "not connected";
	}
	
    

   $username = $_POST['name'];
   $email = $_POST['email'];
	$Message = $_POST['message'];

    $sql = "INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('$username','$email','$Message')";
	$result = mysqli_query($con , $sql);
	
	if($result)
	{
		echo "<script type='text/javascript'>alert('data submited')</script>";
	}else{
		echo "<script type='text/javascript'>alert('data  is not submited')</script>";

	}
	
    
	
?>
