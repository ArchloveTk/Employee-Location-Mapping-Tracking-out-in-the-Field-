
            
<?php


// Create connection
$con = mysqli_connect("localhost","root","","cz");
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['bt']))
{
  $id = [$_POST["id"]];
$sql = "SELECT `name` FROM `employees` where 'ID'= $id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    echo  $row["name"] ;
  }
} else {
  echo "0 results";
}
}
$conn->close();




?>