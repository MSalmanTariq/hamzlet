<?php
		echo '<script>
					let user=JSON.parse(localStorage.getItem("user"));
					if(user!=null)
						if(user.isLogin=="1")
							location.href="./index.php";
				</script>';
?>
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
<body class="hold-transition login-page">
<div class="register-box">
  <div class="login-logo logo_agile">
    <a href="login.php"><span>H</span>amzLet</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body " >
    <p class="login-box-msg">Sign Up</p>

    <form action="./services/signup.php"  class="login"  method="POST"  enctype="multipart/form-data">
      <div class="form-group has-feedback"> 
        <input type="text" class="form-control" placeholder="Full name" name="name" id="name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span> 
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="repass"  id="repass" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
	  <div class="col-xs-12 " >
		 <div class="file-input-wrapper" >
		<p id="dpName"></p>
		  <button class="btn-file-input" type="button" id="fileTrigger">UPLOAD PICTURE</button>
		  <input type="file" name="image[]" id="dpholder" />
		</div>
	  </div>
      
      <div class="row " style=" margin-top: -13px;">
        <div class="col-xs-8 ">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="doRemember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
		 <button type="button" class="btn btn-primary btn-block btn-flat btn-log" onClick="checkPass();">Sign Up</button>
          <button type="submit" class="submit" id="submit">Submit</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
	<div class="log-nav pull-down">
		<a  class="btn btn-link pull-left" style="font-size: 12px;color: blue;" href="login.php">Already a member?</a>
	</div>
	</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->




	<div class="modal modal-warn fade" id="modal-failed_edit">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./register.php';">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Registeration Failure</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Failed To Register
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./register.php';">Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>



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
</script>
<script>
$("#fileTrigger").on("click",function()
{
	$("#dpholder").click();
});
$('#dpholder').change(function(e){
            console.log(e.target.files[0].name);
		$("#dpName").text(e.target.files[0].name);
 });

function checkPass()
{
	if($('input[name=name]').val()=="" || $('input[name=email]').val()=="")$("#submit").click();
	else
	{
		$.ajax({ 
					type: 'POST', 
					url: 'http://localhost/rip/AdminPanel/services/checkadmin.php',  
					dataType: 'json',
					data:{'name':$('input[name=name]').val(),'email':$('input[name=email]').val()},
					success: function (data)
					{ 
						if(data.success==1)
						{
							
								if(data.name==1)
									document.getElementById("name").setCustomValidity('Name Already Taken');
								else if (data.name==0)
									document.getElementById("name").setCustomValidity('');
								if(data.email==1)
									document.getElementById("email").setCustomValidity('Email Already Exists');
								else if (data.email==0)
									document.getElementById("email").setCustomValidity('');
								$("#submit").click();
						}
						else if(data.success==0)
						{
								console.log(data);
						}
						
					},
					error: function(xhr, status, error)
					{
						
							console.log(error);
					}
				});
	}
	if ($('input[name=pass]').val() != $('input[name=repass]').val())
		document.getElementById("repass").setCustomValidity('Passwords must match');
	else if ($('input[name=pass]').val() == $('input[name=repass]').val())
		document.getElementById("repass").setCustomValidity('');
	
}

</script>
	<script src="./dist/js/jquery.custom-file-input.js"></script>
</body>
</html>


<style>

.submit
{
	opacity: 0;
    width: 0px;
    height: 0px;
    margin: 0;
}

.file-input-wrapper {
 
   
    margin-top: -20px;
    margin-bottom: 12px;
    width: 100%;
}
.file-input-wrapper > input[type="file"] {

    position: absolute;
    top: 0;
    right: 0;
    opacity: 0;
}
.file-input-wrapper > .btn-file-input {
       color: #7b2b63;
    background: transparent !important;
    border: 0px !important;
    box-shadow: 0px 2px 13px black !important;
    border-radius: 17px !important;
    background-color: whitesmoke;
	 width: 100%;
}
.file-input-wrapper > .btn-file-input:hover {
      background-color:deeppink;
	      width: 100%;
		 }


</style>
<?php
	if( isset($_REQUEST["id"]) )
	{
		if( $_REQUEST["id"]==0 )
			echo '<script> $("#modal-failed_edit").modal();</script>';
		else if( $_REQUEST["id"]==1 )
		{
			echo '<script>
					location.href="./index.php";
				</script>';
		}
	}
?>