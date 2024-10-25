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
    

   $username = $_POST['username'];
   $phone = $_POST['phone'];
	$email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO aaaa( username, phone, email, password) VALUES ('$username','$phone','$email', '$password')";
	$result = mysqli_query($con , $sql);
	
	if($result)
	{
        if( $username&&$phone)
        {
            header("location:login.php");
            die;
        }
		// echo "<script type='text/javascript'>alert('data submited')</script>";

	}else{
		// echo "<script type='text/javascript'>alert('data  is not submited')</script>";

	}
	
?>
<html>
<head>

    <title>Registration Form</title>
    <style>
        *
{
    margin: 0px;
    padding: 0px;
}
body {
    font-family: Arial, sans-serif;
    background-color:  whitesmoke;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 0;
    
}
h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <div class="container">
      
        <h2>Register</h2>
              <form id="registrationForm"    method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">Register</button>
             <p>I have already account   <a href="login.php">Login</a></p>
        </form>
    </div>
  
</body>
</html>