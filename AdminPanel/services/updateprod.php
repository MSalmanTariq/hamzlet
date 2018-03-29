<?php
if(isset($_FILES['image']))
{
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
			  if(empty($success)==true){
				  while(check("../../images/".$temp))
				  {
					  $temp=$i."".$file_name;
					  $i++;
				  }
				  $file_name=$temp;
				  
				 move_uploaded_file($file_tmp,"../../images/".$file_name);
				 array_push($name,"images/".$file_name);
				
			  }
				else	{}
			
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
										
											if ($result2 = mysqli_query($connection,"UPDATE `product` SET `P_Name`='".$_REQUEST['name']."',`P_Price`=".$_REQUEST['price'].",`P_Description`='".$_REQUEST['des']."',`T_ID`=".$type.",`Category_ID`=".$cat.",`isNew`=".$_REQUEST['isnew'].",`popularity`=".$_REQUEST['popSelect']." WHERE P_ID=".$_REQUEST['id']."")) 
											{
												$success=1;
												if(sizeof($name)>0)
												{
													foreach($name as $n)
													{
														if($n!="images/0")
														{
															if ($result3 = mysqli_query($connection,"INSERT INTO `image`(`I_Name`, `I_Url`, `P_ID`) VALUES ('".$_REQUEST['name']."','".$n."',".$_REQUEST['id'].")")) 
															{
																 $success=1;
																
															} 
															else 
															{
																 
																 $success=0;
															}
														}
													}
													
												 echo '<script> location.href="../editprod.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
												}
												else 
												{
													 $success=1;
													 echo '<script> location.href="../editprod.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
												}
												
											} 
											else 
											{
												$success=0;
												echo '<script> location.href="../editprod.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
												break;
											}
										
									}
								}
							} 
							else 
							{
								$success=0;
								 echo '<script> location.href="../editprod.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
							}
							
						}
						
					}
				} 
				else 
				{
					$success=0;
					echo '<script> location.href="../editprod.php?id='.$_REQUEST['id'].'&success='.$success.'";</script>';
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
