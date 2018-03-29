<?php
		require_once __DIR__ .'/config.php';
	
					$q="UPDATE `admin` SET `islogin`= 0 where username='".$_GET["name"]."'";
				if($result = mysqli_query($connection,$q))
				{
					echo '<script>
							var user=JSON.parse(localStorage.getItem("user"));
							let src=user.src;
							if(user.rem=="1")
								localStorage.setItem("user", JSON.stringify({name:"'.$_GET["name"].'",email:user.email,isLogin:"0",src:user.src,rem:user.rem,pass:user.pass}));
							else
								localStorage.removeItem("user");
							</script>';
					$response["success"] = 1;
				}
			
				echo '<script> location.href="../lockscreen.php";</script>';
				
	


?>
