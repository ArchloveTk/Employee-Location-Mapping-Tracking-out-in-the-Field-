<?php
	

 $username = $_POST['username'];
 $password = $_POST['password'];
 
$con = mysqli_connect("localhost","root","","cz");
$db= mysqli_select_db($con,"cz");

if(isset($_POST['save']))
{

$query = "INSERT INTO `hr` ( `USERNAME`, `PASSWORD`) VALUES ('$username', '$password');";
$query_run=mysqli_query($con,$query);

if($query_run)
{
 echo '<script> alert("data updated")</script>';
 header("Location: login.php");
}
else
{
 echo '<script> alert("data not updated")</script>';

}

}
?>