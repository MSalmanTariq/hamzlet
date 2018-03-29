<?php
	   require_once __DIR__ .'/config.php';
	   $success=0;
	   $result = mysqli_query($connection,"select * from admin where email='".$_POST["email"]."'");
		if($result)
		{
		/*	if (mysqli_num_rows($result) > 0) 
			{
				$q="UPDATE `admin` SET `password`= '".generateRandomString()."' where email='".$_POST["email"]."'";
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
				
			
			}*/
			$success = 1;
			$headers =  'MIME-Version: 1.0' . "\r\n"; 
			$headers .= 'From: Your name <info@address.com>' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
			$msg = generateRandomString();

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			mail("hamzamirza347@gmail.com","HAMLETZ | RESET PASSWORD",$msg,$headers);
		}
		else
		{
			$success = 0;
		
			
	}
		echo generateRandomString();	
		//echo '<script> location.href="../login.php?id='.$success.'";</script>';
		function generateRandomString($length = 6) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
	
	?>