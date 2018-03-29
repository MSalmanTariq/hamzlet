
<!DOCTYPE html>
<html>
<head>
<title>HAMZLET | Edit Category</title>
  <style>
	
	.form-group {
		border-right-style: none !important;
		box-shadow:0px 0px 0px transparent !important;
		border: 0 !important;
	}
</style>
	<script>
	var id=0;

		function assign(i,url)
		{
			document.getElementById('para_m').innerHTML="Are You Sure To Delete: ";
		
			id=i;	

		}

	</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
<?php $tohighlight="home"; include("navside.php"); $tosentResponse=false; include("./services/getparticularcat.php"); ?>
  <div class="content-wrapper" >
  <section class="content-header">
      <h1 style="text-align:center; margin-bottom:10px; border-bottom:2px solid purple; padding-bottom:18px;">
        Edit Product
        <small>Control panel</small>
      </h1>
    </section>
    <section class="content">
      <div class="row" style="margin-top:10px;">
        <div class="col-md-10">
              <form class="form-horizontal" action="./services/updatecat.php" method="POST"  enctype="multipart/form-data">
				 <input type="text" class="form-control" id="id" name="id" value="<?php echo $_GET['id'] ?>" style="display:none">
				<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="<?php echo $response['clothes'][0]['name'] ?>">
                    </div>
                  </div>

				  
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Gender</label>

                    <div class="col-sm-10">
                        <select class="form-control" placeholder="gender" id="genSelect" name="genSelect">
							 <?php
									$tosentResponse=false;
									 include("./services/getGender.php");
									for($i=0;$i<sizeof($response2["gender"]);$i++) 
									{
										echo '<option>'.$response2["gender"][$i]["gender"].'</option>';
										if($response["clothes"][0]["gender"]==$response2["gender"][$i]["gender"])
											echo '<script> document.getElementById("genSelect").selectedIndex='.$i.'; </script>';
									}
								?>	
						  </select>
                    </div>
                  </div>
				   
				  <br />
				
				  
                  <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-5">
                      <button type="submit" class="btn btn-lg btn-danger" style="width:100%;" >Submit</button>
                    </div>
				
                  </div>
				  	
                </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

			<div class="modal modal-success fade" id="modal-success_edit">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./editcat.php?id=<?php echo $_REQUEST['id']?>';">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Updated Successful</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								SuccessFully Updated !
								
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./editcat.php?id=<?php echo $_REQUEST['id']?>';">Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>

		<div class="modal modal-warn fade" id="modal-failed_edit">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./editcat.php?id=<?php echo $_REQUEST['id']?>';">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Update Failure</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Failed To Update
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./editcat.php?id=<?php echo $_REQUEST['id']?>';">Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>
    <!-- /.content -->
  </div>

</div>

<script>
$(function () {
	$('#fileLoader').change(function(e){
            console.log(e.target.files);
		
        });
	
});
	
</script>

</body>
</html>
<?php
	if( isset($_REQUEST["success"]) )
	{
		if( $_REQUEST["success"]==0 )
			echo '<script> $("#modal-failed_edit").modal();</script>';
		else if( $_REQUEST["success"]==1 )
			echo '<script> $("#modal-success_edit").modal();</script>';
		unset($_REQUEST["success"]);
	}
?>