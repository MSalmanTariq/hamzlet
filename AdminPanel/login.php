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
<div class="login-box">
  <div class="login-logo logo_agile">
    <a href="login.php"><span>H</span>amzLet</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in</p>

    <form action="services/login_pass.php" method="POST" class="login">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
          <button type="submit" class="btn btn-primary btn-block btn-flat btn-log" >Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
	<div class="log-nav pull-down">
		<a  class="btn btn-link pull-right" style="font-size: 12px;color: blue;" href="register.php">Register new account</a>
	</div>
	</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
	<div class="modal modal-warn fade" id="modal-failed_edit">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./login.php';">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Login Failure</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Failed To Sign in
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./login.php';">Close</button>
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
</body>
</html>
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