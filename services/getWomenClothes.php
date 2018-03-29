
<?php 
		require_once __DIR__ .'/config.php';
		$query="";
		$cat_name="";
	
		if(isset($_GET['CID']))
		{  
			$Id=$_GET['CID'];
				$query="SELECT * FROM  `product`  JOIN `color` ON (product.Color_ID=color.Color_ID) JOIN size ON (product.S_ID=size.S_ID ) JOIN image ON (product.P_ID=image.P_ID  ) JOIN category ON (product.Category_ID=category.Category_ID )   WHERE (product.Category_ID=".$Id." and product.T_ID=2) order by product.P_Name";
		}
		else if(isset($_GET['cid']))
		{  
			$Id=$_GET['cid'];
				$query="SELECT * FROM  `product`  JOIN `color` ON (product.Color_ID=color.Color_ID) JOIN size ON (product.S_ID=size.S_ID ) JOIN image ON (product.P_ID=image.P_ID  ) JOIN category ON (product.Category_ID=category.Category_ID )   WHERE (product.Category_ID=".$Id." and product.T_ID=2) order by product.P_Name";
		}
		else
			$query="SELECT * FROM  `product`  JOIN `color` ON (product.Color_ID=color.Color_ID) JOIN size ON (product.S_ID=size.S_ID ) JOIN image ON (product.P_ID=image.P_ID  ) JOIN category ON (product.Category_ID=category.Category_ID ) WHERE (T_ID=2) order by product.P_Name";
			
			if(isset($_GET['cid']) || isset($_GET['CID']))
			{
				$r=mysqli_query($connection,"select * from category where Category_ID=".$Id);
				while ($row = mysqli_fetch_array($r))
					$cat_name= $row["Category_Name"];
			}
		
		$response = array();
			$response["success"] = 0;
			$response["message"] = "No item in the cart";
			$response["clothes"]=array();
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
					$clothes["id"] = $row["P_ID"];
					$clothes["pro_name"] = $row["P_Name"];
					$clothes["size"] = $row["S_Name"];
					$clothes["popularity"] = $row["popularity"];
					$clothes["color"] = $row["Color_Name"];
					$clothes["cat_name"] = $row["Category_Name"];
					$clothes["P_PRICE"] = $row["P_Price"];
					$clothes["isNew"] = $row["isNew"];
					$clothes["P_Description"] = $row["P_Description"];
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
					$clothes["cat_name"] = $row["Category_Name"];
					$clothes["color"] = $row["Color_Name"];
					$clothes["popularity"] = $row["popularity"];
					$clothes["P_PRICE"] = $row["P_Price"];
					$clothes["P_Description"] = $row["P_Description"];
					$clothes["isNew"] = $row["isNew"];
					array_push($clothes["I_Url"], $row['I_Url']);
					$temp=$clothes;
				}
				$i++;
				if($i>=mysqli_num_rows($result))
				{
					 array_push($response["clothes"], $temp);
					 
				}
			}
				$response["success"] = 1;
				$response["message"] = "Clothes: ";
		} 
	
		
		
		   if(!isset($tosentResponse) || $tosentResponse==true)
           {
			    header('Content-Type: application/json');
                echo json_encode($response);
           } 
			
?>