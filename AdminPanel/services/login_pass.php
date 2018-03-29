<?php
	   require_once __DIR__ .'/config.php';
	   $remember="0";
	   $success=0;
		if(isset($_POST["doRemember"]))
			$remember="1";
	   $result = mysqli_query($connection,"select * from admin where email='".$_POST["email"]."' and password='".$_POST["pass"]."'");
		if($result)
		{

			if (mysqli_num_rows($result) > 0) 
			{
				
				$q="UPDATE `admin` SET `islogin`= 1 where email='".$_POST["email"]."'";
				while ($row = mysqli_fetch_array($result))
				{
					if($result1 = mysqli_query($connection,$q))
					{
						if($remember=="1")
						 echo '<script>
								localStorage.setItem("user", JSON.stringify({name:"'.$row["username"].'",email:"'.$row["email"].'",isLogin:"1",src:"'.$row["picture"].'",rem:"'.$remember.'",pass:"'.$_POST["pass"].'"}));
							</script>';
						else
							echo '<script>
								localStorage.setItem("user", JSON.stringify({name:"'.$row["username"].'",email:"'.$row["email"].'",isLogin:"1",src:"'.$row["picture"].'",rem:"'.$remember.'",pass:""}));
							</script>';
						 $success = 1;
					}
				}
				
			
			}
			$success = 1;
		}
		else
		{
			$success = 0;
		
			
	}
			
		echo '<script> location.href="../login.php?id='.$success.'";</script>';
		
	
	?>