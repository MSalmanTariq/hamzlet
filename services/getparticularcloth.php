
<?php 
		require_once __DIR__ .'/config.php';
		$query="";
        $mf="";
		$cat_name="";

        if($_REQUEST["MF"]=="MALE") $mf=1;
        else if($_REQUEST["MF"]=="FEMALE") $mf=2;
       
			$query="SELECT * FROM  `product`  JOIN `color` ON (product.Color_ID=color.Color_ID) JOIN size ON (product.S_ID=size.S_ID ) JOIN image ON (product.P_ID=image.P_ID  ) JOIN category ON (product.Category_ID=category.Category_ID ) WHERE (product.T_ID=".$mf." and product.P_ID=".$_REQUEST["id"].") order by product.P_Name";
		
		
		
		$response = array();
			$response["success"] = 0;
			$response["message"] = "No item in the cart";
		$result = mysqli_query($connection,$query);
		if (mysqli_num_rows($result) > 0) 
		{
			$response["clothes"] = array();
			$temp=array();
			$temp["pro_name"]="";
			$i=0;
			while ($row = mysqli_fetch_array($result)) 
			{
				if($temp["pro_name"]==$row["P_Name"])
				{
					array_push($temp['I_Url'], $row['I_Url']);
				}
				else if($i!=0)
				{
					array_push($response["clothes"], $temp);
				
					$clothes = array();
					$clothes["I_Url"]=array();
					$clothes["pro_name"] = $row["P_Name"];
                    $clothes["id"] = $row["P_ID"];
					$clothes["size"] = $row["S_Name"];
					$clothes["color"] = $row["Color_Name"];
					$clothes["P_PRICE"] = $row["P_Price"];
					$clothes["P_Description"] = $row["P_Description"];
					$clothes["isNew"] = $row["isNew"];
					$clothes["popularity"] = $row["popularity"];
					
					array_push($clothes["I_Url"], $row['I_Url']);
					$temp=$clothes;
				}
				else
				{
					$clothes = array();
					$clothes["I_Url"]=array();
					$clothes["pro_name"] = $row["P_Name"];
                    $clothes["id"] = $row["P_ID"];
					$clothes["size"] = $row["S_Name"];
					$clothes["color"] = $row["Color_Name"];
					$clothes["P_PRICE"] = $row["P_Price"];
					$clothes["P_Description"] = $row["P_Description"];
					$clothes["isNew"] = $row["isNew"];
					$clothes["popularity"] = $row["popularity"];

					array_push($clothes["I_Url"], $row['I_Url']);
					$temp=$clothes;
				}
				$i++;
				if($i>=mysqli_num_rows($result))
				 array_push($response["clothes"], $temp);
				 	$cat_name= $row["Category_Name"];
			}
				$response["success"] = 1;
				$response["message"] = "Clothes: ";
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