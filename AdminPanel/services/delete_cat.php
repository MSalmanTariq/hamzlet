
<?php 
		require_once __DIR__ .'/config.php';
		$response= array();

	
				if ($result = mysqli_query($connection,"DELETE FROM `category` WHERE Category_ID=".$_POST['id'])) 
				{
					$response["success"] = 1;
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