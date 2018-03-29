<?php
	require_once __DIR__ .'/config.php';
		$response = array();
		$response["success"] = 0;
		$response["name"] =0;
	$result = mysqli_query($connection,"select * from admin where username='".$_POST["name"]."'");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
				if($row["password"]==$_POST["pass"])
					$response["name"] =0;	
				else
				{
					$response["name"] =1;
				}
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