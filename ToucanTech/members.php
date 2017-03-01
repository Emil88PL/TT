<?php
session_start();

require_once "connect.php";

if(isset($_POST['Submit'])){

$select = $_POST['schools'];


$con = mysqli_connect($host,$db_user,$db_password,$db_name);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


mysqli_select_db($con,"members");

$sql= "INSERT INTO users (username,email,school) VALUES ('$_POST[name]','$_POST[email]','$select')";
$sql2= "INSERT INTO schools (schoolname) VALUES ('$select')";	

mysqli_query($con,$sql);
mysqli_query($con,$sql2);
mysqli_close($con);

header('Location: index.php');
}

?>