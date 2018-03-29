
<?php 
		require_once __DIR__ .'/config.php';
		$response= array();
		
		if ($result = mysqli_query($connection,"DELETE FROM `image` WHERE I_ID=".$_REQUEST["id"])) 
		{
			$response["success"] = 1;
			unlink("../../".$_REQUEST["url"]); 
		} 
		else 
		{
			$response["success"] = 0;
			$response["message"] = "Failed to delete";
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