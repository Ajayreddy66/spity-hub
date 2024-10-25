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
   
		
    $file = $_FILES['file']['name'];
	$tempname = $_FILES['file']['tmp_name'];
	$folder = "images/".$file;
	move_uploaded_file($tempname,$folder);
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$phone = $_POST['phone'];
    $price = $_POST['price'];
    $description = $_POST['description'];
	
	
    $sql = "INSERT INTO `sale`(`image`, `Address`, `city`, `state`, `phone`, `price`, `description`) VALUES ('$folder','$address','$city','$state','$phone','$price','$description')";
	$data = mysqli_query($con , $sql);
	
	if($data)
	{
		echo "<script type='text/javascript'>alert('data submited')</script>";

	}else{
		echo "query failed...!";
	}
	
?>
	