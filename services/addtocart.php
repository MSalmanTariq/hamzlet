<?php 
   $tosentResponse=false;
   include("./config.php"); 
   $response=array();
   $response["success"] = 0;
   $type="";
   
	
		if ($result = mysqli_query( $connection,"INSERT INTO `cart`( `Date`, `pro_id`, `price`, `Quantity`, `total`, `custId`) VALUES ('".$_REQUEST["date"]."',".$_REQUEST["pid"].",".$_REQUEST["price"].",".$_REQUEST["quantity"].",".$_REQUEST["total"].",".$_REQUEST["cid"]." )"   ) ) 
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
