
<!DOCTYPE html>
<html>
<head>
<title>HAMZLET | Edit Product</title>
  <style>
	
	.form-group {
		border-right-style: none !important;
		box-shadow:0px 0px 0px transparent !important;
		border: 0 !important;
	}
</style>
	<script>
	var id=0;
	var uri="";
		function assign(i,url)
		{
			document.getElementById('para_m').innerHTML="Are You Sure To Delete: ";
			document.getElementById('img_m').src="./../"+url;
			id=i;	
			uri=url;
		}
		function Delete()
		{
									$.ajax({ 
											type: 'GET', 
											url: 'http://localhost/rip/AdminPanel/services/delete_image.php',  
											dataType: 'json',
											data:{'id':id,'url':uri},
											success: function (data)
											{ 
												if(data.success==1)
												{
														$("#modal-success").modal();
														
												}
												else if(data.success==0)
												{
														$("#modal-failed").modal();
												}
												
											},
											error: function(xhr, status, error)
											{
												location.reload();
											}
										});
		}
	</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
<?php $tohighlight="home"; include("navside.php"); $tosentResponse=false; include("./services/getparticularcloth.php"); ?>
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
              <form class="form-horizontal" action="./services/updateprod.php" method="POST"  enctype="multipart/form-data">
				 <input type="text" class="form-control" id="id" name="id" value="<?php echo $_GET['id'] ?>" style="display:none">
				<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="<?php echo $response['clothes'][0]['pro_name'] ?>">
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="inputDes" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="des" id="inputDes" placeholder="Description" value="<?php echo $response["clothes"][0]["P_Description"] ?>">
                    </div>
                  </div>
				  
					<div class="form-group">
                    <label for="inputP_PRICE" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputP_PRICE" name="price" placeholder="price" value="<?php echo $response["clothes"][0]["P_PRICE"] ?>">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputisNew" class="col-sm-2 control-label">Is New</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" max="1" min="0" id="inputisNew" name="isnew" placeholder="price" value="<?php echo $response["clothes"][0]["isNew"] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label" >Popularity</label>

                     <div class="col-sm-10">
                       <select class="form-control" placeholder="Popularity" id="popSelect" name="popSelect">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						  </select>
						  <?php echo '<script> document.getElementById("popSelect").selectedIndex='.$response["clothes"][0]["popularity"].'-1; </script>'; ?>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Category</label>

                    <div class="col-sm-10">
                       <select class="form-control" placeholder="gender"  id="catSelect" name="catSelect">
						 <?php
							$tosentResponse=false;
							 include("./services/getCategory.php");
							for($i=0;$i<sizeof($response1["category"]);$i++) 
							{
								echo '<option>'.$response1["category"][$i]["C_NAME"].'</option>';
								if($response["clothes"][0]["cat_name"]==$response1["category"][$i]["C_NAME"])
									echo '<script> document.getElementById("catSelect").selectedIndex='.$i.'; </script>';
							}
						?>	
						  </select>
						   
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
				    <div class="form-group">
						 <div class="col-md-10 col-md-offset-1" id="previewHolder">
						  </div>
						  <div class="col-md-8 col-md-offset-4">
								<label for="inputEmail" class="col-sm-4 control-label">Upload Images</label>
								<input type="file" id="fileLoader" name="image[]" title="Load File" multiple />		
						  </div>	
                  </div>
				  <div class="form-group">
				  	 <div class="col-md-10 col-md-offset-1">
					<?php 
						for($i=0;$i<sizeof($response["clothes"][0]["I_Url"]);$i++)
							echo '
									<div class="col-xs-3 image">
										<span data-toggle="modal" data-target="#modal-danger" style="cursor:pointer;"  class="badge bg-red cross pull-right" onClick="assign('.$response["clothes"][0]["I_ids"][$i].',\''.$response["clothes"][0]["I_Url"][$i].'\')" clickable>X</span>
										 <img class="profile-user-img profile-user-img1 img-responsive" src="./../'.$response["clothes"][0]["I_Url"][$i].'" alt="User profile picture">
									  </div>
								 ';
					 ?>
						
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
	<div class="modal modal-danger fade" id="modal-danger" >
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Delete?</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p id="para_m" style="text-align:center;">
							</p>
							 <img class="img-responsive" id="img_m" alt="img" style="max-width:90px; max-height:90px; margin: 0 auto;" >	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-outline" onClick="Delete()" data-dismiss="modal">Delete</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>
	
		<div class="modal modal-success fade" id="modal-success">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Delete Successful</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								SuccessFully Deleted !
								
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>
			<div class="modal modal-success fade" id="modal-success_edit">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">
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
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>
		<div class="modal modal-warn fade" id="modal-failed">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Delete Failure</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Failed To Delete
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">Close</button>
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
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">
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
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./editprod.php?id=<?php echo $_REQUEST['id']?>';">Close</button>
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