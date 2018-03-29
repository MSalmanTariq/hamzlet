<?php

		
				require_once __DIR__ .'/config.php';
				$type="";
				$result = mysqli_query($connection,"select * from type where T_Name='".$_REQUEST["genSelect"]."'");
				if (mysqli_num_rows($result) > 0) 
				{
					while ($row = mysqli_fetch_array($result)) 
					{
						if($row["T_Name"]==$_REQUEST["genSelect"])
						{
							$type=$row["T_ID"];
							if ($result2 = mysqli_query($connection," UPDATE `category` SET  `Category_Name`=' ".$_REQUEST['name']. "',`MF`=".$type." WHERE Category_ID=".$_REQUEST['id'])) 
							{
								$success=1;
								echo '<script> location.href="../editcat.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
								
							} 
							else 
							{
								$success=0;
								echo '<script> location.href="../editcat.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
								break;
							}
						}
						
					}
				} 
				else 
				{
					$success=0;
					echo '<script> location.href="../editcat.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
				}
				
	
?>
