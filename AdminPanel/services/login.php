<?php
	   require_once __DIR__ .'/config.php';
			$q="UPDATE `admin` SET `islogin`= 1 where username='".$_POST["name"]."'";
		if($result = mysqli_query($connection,$q))
		{
			echo '<script>
					var user=JSON.parse(localStorage.getItem("user"));
					let src=user.src;
					localStorage.setItem("user", JSON.stringify({name:"'.$_POST["name"].'",email:user.email,isLogin:"1",src:user.src,rem:user.rem,pass:user.pass}));
					</script>';
			$response["success"] = 1;
		}
	
		echo '<script> location.href="../profile.php";</script>';
		
	
	?>