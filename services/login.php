<?php
	   require_once __DIR__ .'/config.php';
		$response = array();
		$response["success"] = 0;
		$response["message"] ="";
		$userName=test_input($_REQUEST['userName']);
		$password=test_input($_REQUEST['password']);
		if(!isset($userName)||!isset($password))
		{
			$response["message"] ="User name or password can't be empty";
			echo json_encode($response);
		}
		else 
		{
			$result = mysqli_query($connection,"select * from admin where Admin_Username='$userName'");
			if($result)
			{
				if (mysqli_num_rows($result) > 0) 
				{
					while ($row = mysqli_fetch_array($result)) 
					{
						if ($row["Admin_password"]==$password)
						{
							$response["success"] = 1;
							$response["message"] = "logged In";
							$result1 = mysqli_query($connection,"UPDATE `admin` SET `islogin`=1 WHERE Admin_Username='$userName'");
								
						}
						else if ($row["Admin_password"]!=$password)
						{
							$response["success"] = 0;
							$response["message"] = "password does not match";
						}
					}
						
				}
				else
				{
							$response["success"] = 0;
							$response["message"] = "user name does not match";
				}
			}
			else
			{
				$response["success"] = 0;
				$response["message"] = "failed";
				
			}				

		}
		 function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
 echo json_encode($response);
	?>