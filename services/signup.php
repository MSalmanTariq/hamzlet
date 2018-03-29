<?php 
	header("Content-type:application/json");
		require_once __DIR__ .'/config.php';
		$response = array();
		$response["success"] = 0;
		$response["message"] ="";
		if(!isset($_REQUEST['userName'])||!isset($_REQUEST['password']))
		{
			$response["message"] ="User name or password is empty";
			echo json_encode($response);
			exit();
		}
		$userName=test_input($_REQUEST['userName']);
		$password=test_input($_REQUEST['password']);
		if(!isset($userName)||!isset($password))
		{
			$response["message"] ="User name or password is empty";
		}
		else
		{
			
		
				$result = mysqli_query($connection,"select * from admin where Admin_Username='$userName'");
				if($result)
				{
					if (mysqli_num_rows($result) > 0) 
					{
						$response["message"] ="user already exists";	
					}
					else
					{
						if(strlen($password)<6)
						{
							$response["message"] ="password is less than 6";
						}
						else if($result = mysqli_query($connection,"INSERT INTO `admin`( `Admin_Username`, `Admin_password`) VALUES('$userName','$password')"))
						{
							$response["success"] = 1;
						$response["message"] = "admin inserted";
						}
					}
				}
				else
				{
					$response["success"] = 0;
					$response["message"] = "failed";
					
				}
			
		}
		 echo json_encode($response);	
		 function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
?>