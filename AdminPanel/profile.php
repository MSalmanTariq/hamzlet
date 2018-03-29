<!DOCTYPE html>
<html>
<head>
  <title>AdminLTE 2 | User Profile</title>
  <style>
	.form-group {
		border-right-style: none !important;
		box-shadow:0px 0px 0px transparent !important;
		border: 0 !important;
	}
	.submit
	{
		opacity: 0;
		width: 0px;
		height: 0px;
		margin: 0;
	}

</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $tohighlight="home"; include("navside.php"); ?>
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
			  <li><a href="#passtab" data-toggle="tab">Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
						   <!-- Profile Image -->
						  <div class="box box-primary">
							<div class="box-body box-profile">
							  <img class="profile-user-img img-responsive img-circle u_img"  alt="User profile picture">

							  <h3 class="profile-username text-center username" ></h3>

							  <p class="text-muted text-center">Administrator</p>

							 <div class="col-md-10 col-md-offset-1">
								 <ul class="list-group list-group-unbordered">
								<li class="list-group-item">
								  <b>User Name</b> <a class="pull-right username"></a>
								</li>
								<li class="list-group-item">
								  <b>Email</b> <a class="pull-right u_email">543</a>
								</li>
							  </ul>
							 </div>
							</div>
							<!-- /.box-body -->
						  </div>
              </div>
             
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="./services/updateAdmin_img.php"   method="POST"  enctype="multipart/form-data">
				<div class="form-group">
                     <img class="profile-user-img img-responsive img-circle u_img"  id="u_img" alt="User profile picture"  onclick="openfileDialog();" style="cursor:pointer;">
							<input type="file" id="fileLoader" name="image[]" title="Load File"  style="opacity:0; width:0px; height:0px;"/>
						
                  </div>
				<input type="text"  id="prevImg" style="display:none" name="url">
                  <div class="form-group">
				  <div class="col-md-10 col-md-offset-1">
                    <label for="inputName" class="col-sm-2 control-label"  >Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control username" id="inputName" placeholder="Name" name="name" readonly="readonly">
                    </div>
					</div>
                  </div>
                  <div class="form-group">
				  <div class="col-md-10 col-md-offset-1">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control " id="inputEmail" placeholder="Email" name="email" readonly="readonly">
                    </div>
					</div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-2 pull-right">
					<button type="button" class="btn btn-danger" onclick="checkFile();">Submit</button>
                      <button type="submit" class="submit" id="submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane  -->
			     <div class="tab-pane" id="passtab">
                <form class="form-horizontal" method="POST"  action="./services/updateAdmin_pass.php">
				
				<input type="text"  id="passname" style="display:none" name="name">
                  <div class="form-group">
                    <label for="inputPass" class="col-sm-2 control-label">Old Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="oldpass" placeholder="Password" name="oldpass" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPass_new" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required>
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputPass_new_re" class="col-sm-2 control-label">Re Type New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="repass" placeholder="Password" name="repass" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-2 pull-right">
                       <button type="button" class="btn btn-danger" onClick="checkPass();">Submit</button>
						<button type="submit" class="submit" id="submit1">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

</div>
<!-- ./wrapper -->

<script>
var files=0;
function openfileDialog() {
    $("#fileLoader").click();
}
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#u_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
		
    }
    $("#fileLoader").change(function(e){
        readURL(this);
		files=e.target.files.length;
    });
setUserDetails("yes");
document.getElementById("inputName").value=user.name;
document.getElementById("passname").value=user.name;
document.getElementById("inputEmail").value=user.email;
document.getElementById("prevImg").value=user.src;



function checkFile()
{
	if(files>0)
		$("#submit").click();
	else
		alert("Please Select 1 Image");
	
}


function checkPass()
{
	if($('input[name=oldpass]').val()=="" )$("#submit1").click();
	else
	{
		$.ajax({ 
					type: 'POST', 
					url: 'http://localhost/rip/AdminPanel/services/checkpass.php',  
					dataType: 'json',
					data:{'name':user.name,'pass':$('input[name=oldpass]').val()},
					success: function (data)
					{ 
						if(data.success==1)
						{
							
								if(data.name==1)
									document.getElementById("oldpass").setCustomValidity('Password InCorrect');
								else if (data.name==0)
									document.getElementById("oldpass").setCustomValidity('');
								console.log(data);
							
						}
						else if(data.success==0)
						{
								console.log(data);
						}
							if ($('input[name=pass]').val() != $('input[name=repass]').val())
								document.getElementById("repass").setCustomValidity('Passwords must match');
							else if ($('input[name=pass]').val() == $('input[name=repass]').val())
								document.getElementById("repass").setCustomValidity('');
							$("#submit1").click();
						
					},
					error: function(xhr, status, error)
					{
						
							console.log(error);
					}
				});
	}

}

</script>
</body>
</html>
