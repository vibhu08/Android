<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','student');
 
$username = $_GET['email'];
$password = $_GET['pass'];

$con = mysqli_connect(HOST,USER,PASS,DB);
 
$sql = "select * from user where email='$username' and pass='$password'";
 
$res = mysqli_query($con,$sql);
 
$check = mysqli_num_rows($res);

$result = array();

 if($check>0){

array_push($result,array('name'=>"success"));
echo json_encode($result);

}
else
{

array_push($result,array('name'=>"error"));
echo json_encode($result);
}

mysqli_close($con);
?>


