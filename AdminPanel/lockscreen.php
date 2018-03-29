
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HAMZLET | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page lockscreen">
<div class="lockscreen-wrapper">
  <div class="login-logo logo_agile lockscreen-logo">
    <a href="lockscreen.php"><span>H</span>amzLet</a>
  </div>
  <div class="lockscreen-name username"></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img  alt="User Image" class="u_img">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials"  method="POST"  action="./services/login.php">
      <div class="input-group">
	   <input type="password" style="display:none" name="name" required id="name">
        <input type="password" class="form-control" placeholder="password" name="pass" required id="pass">

        <div class="input-group-btn">
		 <button type="submit" class="submit" id="submit1">Submit</button>
          <button type="button" class="btn" onClick="checkPass();"><i class="fa fa-arrow-right text-muted"></i></button>
		 
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="text-center" style="color:#fff;">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="login.php"  style="color:#000 !important;">Or sign in as a different user</a>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });

  });
  $('.pull-down').each(function() {
  var $this=$(this);
	$this.css('margin-top', $this.parent().position().top+ $this.parent().height()-$this.position().top);
	
});
		 String.prototype.capitalize = function() {
			return this.charAt(0).toUpperCase() + this.slice(1);
		}
			var user=JSON.parse(localStorage.getItem("user"));
	setUserDetails("no");
	document.getElementById("name").value=user.name;
	document.getElementById("pass").value=user.pass;
		function setUserDetails(email)
		{
			
		
			if(user!=null)
				if(user.isLogin=="0" && user.rem=="0")
					location.href="./login.php";
				else
				{
					
					[].slice.call(document.getElementsByClassName("username")).forEach(function(e)
					{
						e.innerHTML=user.name.capitalize();
					});
					
					[].slice.call(document.getElementsByClassName("u_img")).forEach(function(e)
					{
						e.src=user.src;
					});
					if(email!="no")
					{
						[].slice.call(document.getElementsByClassName("u_email")).forEach(function(e)
						{
							e.innerHTML=user.email;
						});
					}
					$("#logout").attr("href","services/logout.php?name="+user.name);

				
				}
			else location.href="./login.php";
				
		}
function checkPass()
{
	if($('input[name=pass]').val()=="" )$("#submit1").click();
	else
	{
			if($('input[name=pass]').val()!= user.pass)
				document.getElementById("pass").setCustomValidity('Password InCorrect');
			else 
				document.getElementById("pass").setCustomValidity('');
			$("#submit1").click();
	}

}
</script>
</body>
</html>
