<?php
if(isset($_FILES['image']))
{
	$success=0;
	$name=array();
	
		try {
			for ($x = 0; $x <sizeof($_FILES['image']['name']); $x++)
			{
			  $errors= array();
			  $file_name = "".$_FILES['image']['name'][$x];
			  $file_size =$_FILES['image']['size'][$x];
			  $file_tmp =$_FILES['image']['tmp_name'][$x];
			  $file_type=$_FILES['image']['type'][$x];
			  $t=explode('.',$file_name);
			  $t=end($t);
			  $file_ext=strtolower("".$t);
			  
			  $expensions= array("jpeg","jpg","png");
			  
			  if(in_array($file_ext,$expensions)=== false){
				  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
			  }
			  
			  if($file_size > 2097152){
				  $errors[]='File size must be excately 2 MB';
			  }
			  $i=0; $temp=$file_name;
			  if(empty($errors)==true){
				  while(check("../../images/".$temp))
				  {
					  $temp=$i."".$file_name;
					  $i++;
				  }
				  $file_name=$temp;
				  
				 move_uploaded_file($file_tmp,"../../images/".$file_name);
				 array_push($name,"images/".$file_name);
			
			  }
			  }
		   }
		 
		catch(Exception $e) {
		}
		finally
		{
			if(isset($_FILES['image']))
			{
				require_once __DIR__ .'/config.php';
				$type="";
				$cat="";
				$result = mysqli_query($connection,"select * from type where T_Name='".$_REQUEST["genSelect"]."'");
				if (mysqli_num_rows($result) > 0) 
				{
					while ($row = mysqli_fetch_array($result)) 
					{
						if($row["T_Name"]==$_REQUEST["genSelect"])
						{
							$type=$row["T_ID"];
							$result1 = mysqli_query($connection,"select * from category where Category_Name='".$_REQUEST["catSelect"]."'");
							if (mysqli_num_rows($result1) > 0) 
							{
								while ($row = mysqli_fetch_array($result1)) 
								{
									if($row["Category_Name"]==$_REQUEST["catSelect"])
									{
										$cat=$row["Category_ID"];
										$result4 = mysqli_query($connection,"SELECT max(product.P_ID) as cpid FROM `product`");
										if (mysqli_num_rows($result4) > 0) 
										{
											$row = mysqli_fetch_array($result4);
											  $cpid=$row[0];
											 $cpid=$cpid+1;
											if ($result2 = mysqli_query($connection,"INSERT INTO `product`( `P_ID`, `P_Name`, `P_Price`, `P_Description`, `T_ID`, `Category_ID`, `isNew`, `popularity`) VALUES (".$cpid.",'".$_REQUEST['name']."',".$_REQUEST['price'].",'".$_REQUEST['des']."',".$type.",".$cat.",".$_REQUEST['isnew'].",".$_REQUEST['popSelect'].") ")) 
											{
												$success=1;
												if(sizeof($name)>0)
												{
													foreach($name as $n)
													{
															if ($result3 = mysqli_query($connection,"INSERT INTO `image`(`I_Name`, `I_Url`, `P_ID`) VALUES ('".$_REQUEST['name']."','".$n."',".$cpid.")")) 
															{
																 $success=1;
															} 
															else 
															{
																 $success=0;
																
															}
													}
												}
												else echo '<script> location.href="../viewprod.php?success='.$success.'";</script>';
													
												
												echo '<script> location.href="../viewprod.php?success='.$success.'";</script>';
											} 
											else 
											{
												 $success=0;
												echo '<script> location.href="../viewprod.php?success='.$success.'";</script>';
											}
										}
										
									}
								}
							} 
							else 
							{
								 echo '<script> location.href="../viewprod.php?success='.$success.'";</script>';
							}
							
						}
						
					}
				} 
				else 
				{
					 echo '<script> location.href="../viewprod.php?success='.$success.'";</script>';
				}
				
				
			}
		}

}

   function check($target_file)
   {
	   if (file_exists($target_file)) {
			return true;
		}
		else return false;
   }
?>
