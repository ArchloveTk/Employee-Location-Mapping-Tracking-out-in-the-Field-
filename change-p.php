<?php 
 $con = mysqli_connect("localhost","root","","cz");
 $db= mysqli_select_db($con,"cz");


if (isset($_SESSION['id']) && isset($_SESSION['username'])) 
{



if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: edit_employee.html?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: edit_employee.html?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: edit_employee.html?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $id = $_SESSION['id'];

        $sql = "SELECT password
                FROM employess WHERE 
                id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE employess 
        	          SET password='$np'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: edit_employee.html?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: edit_employee.html?error=Incorrect password");
	        exit();
        }

    }

    
}
else
{
	header("Location: edit_employee.html");
	exit();
}

}
else
{
     header("Location: HRform.html");
     exit();
}