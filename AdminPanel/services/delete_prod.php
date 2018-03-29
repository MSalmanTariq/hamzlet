
<?php 
		require_once __DIR__ .'/config.php';
		$response= array();
		try
		{
			for ($x = 0; $x <sizeof($_POST['ids']); $x++)
			{
				if ($result = mysqli_query($connection,"DELETE FROM `image` WHERE I_ID=".$_POST['ids'][$x])) 
				{
					$response["success"] = 1;
					unlink("../../".$_POST['url'][$x]); 
				} 
				else 
				{
					$response["success"] = 0;
					$response["message"] = "Failed to delete";
				}
			}
		}
		catch(Exception $e) {
		}
		finally
		{
				if ($result = mysqli_query($connection,"DELETE FROM `product` WHERE P_ID=".$_POST['id'])) 
				{
					$response["success"] = 1;
				} 
				else 
				{
					$response["success"] = 0;
					$response["message"] = "Failed to delete";
				}
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