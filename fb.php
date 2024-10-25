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
    $name = $_POST['name'];
    $email = $_POST['email'];
     $rating = $_POST['rating'];
     $feedback = $_POST['feedback'];
     $sql = "INSERT INTO `feedback`( `name`, `email`, `rating`, `feedback`) VALUES ('$name','$email','$rating','$feedback')";
     $result = mysqli_query($con , $sql);
     
     if($result)
     {
         echo "<script type='text/javascript'>alert('data submited')</script>";
     }else{
         echo "<script type='text/javascript'>alert('data  is not submited')</script>";
 
     }
     ?>