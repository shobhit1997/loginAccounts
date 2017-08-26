<?php
 header("Access-Control-Allow-Origin: *");
$servername = "mysql.living-with-pride.in";
$username = "hreninov";
$password = "January246";
$dbname = "lwpapj";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  



  $eninovID=$_POST['eninovID'];


$password=$_POST['password'];
$sql = "INSERT INTO admin (name,eninovID,password) VALUES ('abcd','$eninovID','$password')";
 $q=mysqli_query($conn,$sql);
 if($q)
  echo "success";
 else
  echo  $conn->querry_error;
 
 ?>