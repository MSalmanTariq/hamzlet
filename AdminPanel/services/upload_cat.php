<?php 
   $tosentResponse=false;
   include("./gettype.php"); 
   $response=array();
   $response["success"] = 0;
   $type="";
   
	foreach($response_type["type"] as $row)
		if(in_array($_REQUEST["gender"],$row)==true)
			$type=$row["id"];
		  // $response["success"] = $_P["cname"];
		
		if ($result = mysqli_query( $connection," INSERT INTO `category`(`Category_Name`, `MF`) VALUES ('".$_REQUEST["cname"]."',".$type.") "  )) 
		{
			
			$response["success"] = 1;
		} 
		else 
		{
			$response["success"] = 0;
		}
		
		header('Content-Type: application/json');
		echo json_encode($response);
          
         
               
	
?>
