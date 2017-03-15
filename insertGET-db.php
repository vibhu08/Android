<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"");
define('DB','student');
  
   $name = $_GET['name'];
   $email = $_GET['email'];
   $pass = $_GET['pass'];
   $phone = $_GET['phone'];
   $dob = $_GET['dob'];

   $con = mysqli_connect(HOST,USER,PASS,DB);
   

  $sql = "insert into user(name,email,pass,phone,dob) values ('$name','$email','$pass','$phone','$dob')";
 
 if(mysqli_query($con,$sql))
 {
   $a=array("successfull");
   echo json_encode($a);
  }
  
else
 {
    $a=array("fail");
    echo json_encode($a);
    
  }
  mysqli_close($con);
?>