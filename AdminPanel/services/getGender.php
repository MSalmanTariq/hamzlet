
<?php 
		require_once __DIR__ .'/config.php';
		$response2 = array();
		$result = mysqli_query($connection,"select * from type");
		if (mysqli_num_rows($result) > 0) 
		{
			$response2["gender"] = array();
			while ($row = mysqli_fetch_array($result)) 
			{
				$clothes = array();
				$clothes["id"] = $row["T_ID"];
				$clothes["gender"] = $row["T_Name"];
				array_push($response2["gender"], $clothes);
			}
			$response2["success"] = 1;
		} 
		else 
		{
			$response2["success"] = 0;
			$response2["message"] = "No item in the cart";
		}
		
		
		 if(!isset($tosentResponse) )
           {
			    header('Content-Type: application/json');
                echo json_encode($response2);
           } 
           else if($tosentResponse==true)
           {
                echo json_encode($response2);
           } 
               
	

				
?>