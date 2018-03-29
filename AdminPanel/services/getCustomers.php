
<?php 
		require_once __DIR__ .'/config.php';
		$response = array();
		$result = mysqli_query($connection,"select * from customer");
		if (mysqli_num_rows($result) > 0) 
		{
			$response["customer"] = array();
			while ($row = mysqli_fetch_array($result)) 
			{
				$clothes = array();
				$clothes["id"] = $row["CID"];
				$clothes["name"] = $row["C_Name"];
				$clothes["cell"] = $row["C_Cell"];
				$clothes["address"] = $row["C_Address"];
				$clothes["cnic"] = $row["CNIC"];
				$clothes["email"] = $row["email"];
				$clothes["zipcode"] = $row["zipcode"];
				array_push($response["customer"],$clothes);
			}
			$response["success"] = 1;
		} 
		else 
		{
			$response["success"] = 0;
		}
		
		
		 if(!isset($tosentResponse) )
           {
			    header('Content-Type: application/json');
                echo json_encode($response);
           } 
           else if($tosentResponse==true)
           {
                echo json_encode($response);
           } 
               
	

				
?>