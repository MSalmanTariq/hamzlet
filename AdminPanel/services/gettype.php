
<?php 
		require_once __DIR__ .'/config.php';
		$response_type = array();
		
		$result = mysqli_query($connection,"select * from type");
		if (mysqli_num_rows($result) > 0) 
		{
			$response_type["type"] = array();
			while ($row = mysqli_fetch_array($result)) 
			{
				$clothes = array();
				$clothes["id"] = $row["T_ID"];
				$clothes["type"] = $row["T_Name"];
				
				array_push($response_type["type"], $clothes);
			}
			$response_type["success"] = 1;
		} 
		else 
		{
			$response_type["success"] = 0;
			$response_type["message"] = "No item in the cart";
		}
		
		
		 if(!isset($tosentResponse) )
           {
			    header('Content-Type: application/json');
                echo json_encode($response_type);
           } 
           else if($tosentResponse==true)
           {
                echo json_encode($response_type);
           } 
               
	

				
?>