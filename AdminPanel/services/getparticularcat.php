
<?php 
		require_once __DIR__ .'/config.php';
		$query="";
		$cat_name="";
		$response = array();
		$response["success"] = 0;
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
		$query="SELECT * FROM `category` WHERE Category_ID =".$_REQUEST["id"];
		$result = mysqli_query($connection,$query);
		
		if (mysqli_num_rows($result) > 0) 
		{
			$response["clothes"] = array();
			
			while ($row = mysqli_fetch_array($result)) 
			{
	
							$clothes = array();	
							$clothes["id"] = $row["Category_ID"];
							$clothes["name"] = $row["Category_Name"];
							$clothes["MF"] = $row["MF"];
							$clothes["gender"]="none";
							if(in_array($row["MF"],$typeholderId)==true)
								$clothes["gender"]="".$typeholderName[array_search($row["MF"],$typeholderId)];
							array_push($response["clothes"], $clothes);
							
			}
			$response["success"] = 1;			
					
		}
		else	$response["success"] = 0;
			
	
		
		
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