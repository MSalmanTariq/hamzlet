
<?php 
		require_once __DIR__ .'/config.php';
		$response1 = array();
		$result = mysqli_query($connection," select C_Name as name,cart.Date as date,sum(cart.total) as total,count(cart.pro_id) as amount from transaction join customer on transaction.C_ID=customer.CID join cart on transaction.Tran_ID=cart.transactionID
GROUP by C_Name,cart.Date;");
		if (mysqli_num_rows($result) > 0) 
		{
			$response1["transaction"] = array();
			while ($row = mysqli_fetch_array($result)) 
			{
				$clothes = array();
				$clothes["name"] = $row["name"];
				$clothes["date"] = $row["date"];
				$clothes["total"] = $row["total"];
				$clothes["amount"] = $row["amount"];
				array_push($response1["transaction"], $clothes);
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