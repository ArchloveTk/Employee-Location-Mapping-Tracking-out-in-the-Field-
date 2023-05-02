<?php

    
	
$con = mysqli_connect("localhost","root","","cz");
$db= mysqli_select_db($con,"hr");




if(isset($_POST["login"]))
	{
		//something was posted
        $user = $_POST['username'];
        $password = $_POST['password'];

		if(!empty($user) && !empty($password) && !is_numeric($user))
		{

			//read from database
			$query = "select * from hr where USERNAME = '$user' limit 1" ;
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data["PASSWORD"] == $password) 
					{

						$_SESSION["USERNAME"] = $user_data['username'];
						header("Location: HRform.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
