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


/*$sql = "SELECT password FROM admin WHERE eninovID='$eninovID'";
//$q=mysqli_query($conn,"select * from `admin`");
$q= mysqli_query($conn,$sql);

if (mysqli_num_rows($q) > 0) {
  
  
    
  

$row=mysqli_fetch_assoc($q);
 
  if($row["password"]==$password)
    {
      echo "success";
    }
    else
    {
      echo "error";
    }



}

 else {
    echo "error";
}*/


$sql = "INSERT INTO admin (name,eninovID,password) VALUES ('abcd','$eninovID','$password')";







if ($conn->query($sql) === TRUE) {

    echo "success";

} else {


//echo "error";
  //echo mysqli_error($conn)+"";
    echo mysqli_error($conn);
}

$conn->close();
?>
