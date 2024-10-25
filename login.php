<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $email= $_POST['email'];
    $password = $_POST['password'];
    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query = "select * from aaaa where email = '$email' limit 1";
        $result = mysqli_query($con ,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if( $user_data['password']== $password)
                {
                    header("location:page-1.html");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'>alert('worng username or password')</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('worng username or password')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
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

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0.2, 0.5);
    width: 500px;
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
    <div class="login-container">
        <h2>Login</h2>
        <form   method="post">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" id="login-Button">submit</button>
        </form>
    </div>
    <script src="js"></script>
</body>
</html>