
<?php 
		require_once __DIR__ .'/config.php';
		$response1 = array();
		$typeholderId = array();
		$typeholderName = array();
		$r = mysqli_query($connection,"select * from type");
		if (mysqli_num_rows($r) > 0)
		{
			while ($row = mysqli_fetch_array($r)) 
			{
				array_push($typeholderName,$row["T_Name"]);
				array_push($typeholderId , $row["T_ID"]);
			}
		}
		$result = mysqli_query($connection,"select * from category");
		if (mysqli_num_rows($result) > 0) 
		{
			$response1["category"] = array();
			while ($row = mysqli_fetch_array($result)) 
			{
				$clothes = array();
				$clothes["C_ID"] = $row["Category_ID"];
				$clothes["C_NAME"] = $row["Category_Name"];
				$clothes["MF"] = $row["MF"];
				$clothes["gender"]="none";
				if(in_array($row["MF"],$typeholderId)==true)
					$clothes["gender"]="".$typeholderName[array_search($row["MF"],$typeholderId)];
				array_push($response1["category"], $clothes);
			}
			$response1["success"] = 1;
		} 
		else 
		{
			$response1["success"] = 0;
			$response1["message"] = "No item in the cart";
		}
		
		
		 if(!isset($tosentResponse) )
           {
			    header('Content-Type: application/json');
                echo json_encode($response1);
           } 
           else if($tosentResponse==true)
           {
                echo json_encode($response1);
           } 
               
	

				
?>