<?php 
	$R=0;
	if(isset($_POST['data']) )
	{
		
			$someJ ='[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
			$someArray= json_decode($_POST['data'],true);
			
	 // echo $someArray[0]; // Access Array data
	if( $someArray[0]["name"]=="Hamza");
	$R=1;
	
	}
	echo json_encode ($R);
?>