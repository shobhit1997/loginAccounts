<?php

include "connectDB.php";
  

 $eninovID=$_POST['eninovID'];


$password=$_POST['password'];


$sql = "SELECT password FROM admin WHERE eninovID='$eninovID'";
//$q=mysqli_query($conn,"select * from `admin`");
$q= mysqli_query($conn,$sql);

if (mysqli_num_rows($q) > 0) {
  
  
    
  
$q= mysqli_query($conn,$sql);
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
}


$conn->close();
?>
