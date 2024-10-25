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
$id= $_GET['id'];
$query= "DELETE FROM `sale` WHERE id = '$id' ";
$data = mysqli_query($con,$query);
if($data)
{
    echo "recored deleted";
}
else{
    echo " failed to delete";
}
?>