<?php
	require_once __DIR__ .'/config.php';
		$response = array();
		$response["success"] = 0;
		$response["name"] =0;
		$response["email"] =0;
	$result = mysqli_query($connection,"select * from admin where username='".$_POST["name"]."'");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			$response["name"] =1;	
		}
		else
		{
			$response["name"] =0;
		}
		$response["success"] = 1;
	}
	else
	{
		$response["success"] = 0;
		$response["message"] = "failed";
		
	}
	
	$result1 = mysqli_query($connection,"select * from admin where email='".$_POST["email"]."'");
	if($result)
	{
		if (mysqli_num_rows($result1) > 0) 
		{
			$response["email"] =1;	
		}
		else
		{
			$response["email"] =0;
		}
		$response["success"] = 1;
	}
	else
	{
		$response["success"] = 0;
		$response["message"] = "failed";
		
	}
	 echo json_encode($response);	
?>