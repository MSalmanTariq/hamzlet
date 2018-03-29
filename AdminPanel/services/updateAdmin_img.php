<?php
print_r($_POST);
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
				  while(check("dp/".$temp))
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
				require_once __DIR__ .'/config.php';
				$temp="dp/avatar.png";
			
				foreach($name as $n)
					if($n!="images/0")
					{
						$q="UPDATE `admin` SET `picture`= '".$n."' where username='".$_POST["name"]."'";
						$temp=$n;
					}
				if($result = mysqli_query($connection,$q))
				{
					echo '<script>
							var user=JSON.parse(localStorage.getItem("user"));
							let src=user.src;
							localStorage.setItem("user", JSON.stringify({name:"'.$_POST["name"].'",email:"'.$_POST["email"].'",isLogin:"1",src:"'.$temp.'",rem:user.rem,pass:user.pass}));
							</script>';
					$response["success"] = 1;
				}
				unlink("../".$_POST["url"]);
				echo '<script> location.href="../profile.php";</script>';
				
				
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
