<html>
<header>
        <h1>Spiti hub</h1>
    </header>
<style>
    header {
    background-color: #4A90E2;
    color: white;
    padding: 20px 0;
    text-align: center;
}
footer {
    background: #4A90E2;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
    margin-top:150px;
}
.main{
    margin-top:50px;
}
.but
{
   height:40px;
   width:60px;
   border-radius:5px;
}
    </style>
<?php
error_reporting(0);

// Database connection details
$server = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$con = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch data
$sql = "SELECT * FROM sale";
$data = mysqli_query($con, $sql);

// Check if any data was returned
if (mysqli_num_rows($data) > 0) {
    
    echo '<table border="1" cellspacing="7" width="100%" class="main">
            <tr>
               <th width="5%">id</th>
                <th width="15%">Image</th>
                <th width="10%">Address</th>
                <th width="10%">City</th>
                <th width="10%">State</th>
                <th width="10%">Phone</th>
                <th width="10%">Price</th>
                <th width="20%">Description</th>
                <th width="15%">Rent</th>
            </tr>';
        
  
    // Output data of each row
    while ($result = mysqli_fetch_assoc($data)) {
      
        echo '<tr>
                <td>'.$result['id'].'</td>
                <td><img src="'.$result['image'].'" height="100px" width="100px" ></td>
                <td>' . $result['Address'] . '</td>
                <td>' . $result['city'] . '</td>
                <td>' . $result['state'] . '</td>
                <td>' . $result['phone'] . '</td>
                <td>' . $result['price'] . '</td>
                <td>' . $result['description'] . '</td>
                <td>
               <center> <a href="delete.php?id='.$result['id'].'"><input type="submit" 
                value="Rent" class="but" onclick="return validation()"></a></center></td>
              </tr>';
    }
    
    echo '</table>';
} else {
    echo "No records found";
}

// Close connection
mysqli_close($con);
?>    <footer>
<div class="container">
    <p>&copy; 2024 Spiti Hub. All rights reserved.</p>
    <p>123 Main Street, Anytown, USA</p>
    <p>Email: info@spitihub.com | Phone: (123) 456-7890</p>
   
</div>
</footer>
<script>
    function validation()
    {
        return confirm('Are you sure you to buy this home ?');
    }
</script>
</html>
