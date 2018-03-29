<?php 
	if(isset($_FILES['image']))
{
	echo "here";
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
				  while(check("../dp/".$temp))
				  {
					  $temp=$i."".$file_name;
					  $i++;
				  }
				  $file_name=$temp;
				  
				 move_uploaded_file($file_tmp,"../dp/".$file_name);
				 array_push($name,"dp/".$file_name);
				
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
				$remember="0";
				if(isset($_POST["doRemember"]))
					$remember="1";
				require_once __DIR__ .'/config.php';
				$response = array();
				$response["success"] = 0;
				$temp="dp/avatar.png";
				$q="INSERT INTO `admin`( `username`, `email`, `password`, `islogin`) VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["pass"]."',1)";
				foreach($name as $n)
					if($n!="images/0")
					{
						$q="INSERT INTO `admin`( `username`, `email`, `password`, `islogin`, `picture`) VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["pass"]."',1,'".$n."')";
						$temp=$n;
					}
				if($result = mysqli_query($connection,$q))
				{
					if($remember=="1")
						echo '<script>
								localStorage.setItem("user", JSON.stringify({name:"'.$_POST["name"].'",email:"'.$_POST["email"].'",isLogin:"1",src:"'.$temp.'",rem:"'.$remember.'",pass:"'.$_POST["pass"].'"}));
							</script>';
					else
					echo 
						'<script>
							localStorage.setItem("user", JSON.stringify({name:"'.$_POST["name"].'",email:"'.$_POST["email"].'",isLogin:"1",src:"'.$temp.'",rem:"'.$remember.'",pass:""}));
						</script>';
					$response["success"] = 1;
				}
				echo '<script> location.href="../register.php?id='.$response["success"].'";</script>';
				
			}
		}

}
else 	print_r( $_FILES);
   function check($target_file)
   {
	   if (file_exists($target_file)) {
			return true;
		}
		else return false;
   }
	/*header("Content-type:application/json");
		require_once __DIR__ .'/config.php';
		$response = array();
		$response["success"] = 0;
		$response["message"] ="";
		if(!isset($_REQUEST['userName'])||!isset($_REQUEST['password']))
		{
			$response["message"] ="User name or password is empty";
			echo json_encode($response);
			exit();
		}
		$userName=test_input($_REQUEST['userName']);
		$password=test_input($_REQUEST['password']);
		if(!isset($userName)||!isset($password))
		{
			$response["message"] ="User name or password is empty";
		}
		else
		{
			
		
				$result = mysqli_query($connection,"select * from admin where Admin_Username='$userName'");
				if($result)
				{
					if (mysqli_num_rows($result) > 0) 
					{
						$response["message"] ="user already exists";	
					}
					else
					{
						if(strlen($password)<6)
						{
							$response["message"] ="password is less than 6";
						}
						else if($result = mysqli_query($connection,"INSERT INTO `admin`( `Admin_Username`, `Admin_password`) VALUES('$userName','$password')"))
						{
							$response["success"] = 1;
							$response["message"] = "admin inserted";
						}
					}
				}
				else
				{
					$response["success"] = 0;
					$response["message"] = "failed";
					
				}
			
		}
		 echo json_encode($response);	
		 function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		*/
?>