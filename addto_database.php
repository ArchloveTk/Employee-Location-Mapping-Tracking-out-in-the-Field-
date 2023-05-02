 <?php
	
   $id =  $_POST['id'];
	$name = $_POST['fname'];
   $surname = $_POST['surname'];
	$email = $_POST['email'];
  $username = $_POST['username'];
	$Password = $_POST['password'];
	// creating database connection 
$con = mysqli_connect("localhost","root","","cz");
$db= mysqli_select_db($con,"cz");

if(isset($_POST['save']))
{
// inserting info in the data base 
$query = "INSERT INTO `employess`(`ID`, `name`, `surname`, `email`, `username`, `password`) VALUES ('$id', '$name', '$surname', '$email', '$username','$Password');";
$query_run=mysqli_query($con,$query);
 
if($query_run)
{
    echo '<script> alert("data updated")  </script> ' ;
    echo '<script> header("location:HRform.html") </script>' ; // open another form if info is updated
}
else
{
    echo '<script> alert("data not updated")</script>';

}

}
?>