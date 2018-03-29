<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <title>HAMZLET | View Categories</title>
  <style>
		.logo_agile span {
			background: #7b2b63;
			padding: 0 17px;
			font-weight: bold;
			color: #fff;
			font-family: 'Open Sans', sans-serif;
		}
		.logo_agile  a {
			font-weight: 300;
			color: #000;
			letter-spacing: 1px;
			position:relative;
			background: transparent !important;
			color: #fef !important;
			
			
		}
		.logo_agile
		{
				font-family: fantasy;
		}
		.logo_agile h1 a:hover {
		  text-decoration:none;
		}
	</style>
	<script>
		var id=0;
		function assign(name,i)
		{
			document.getElementById('para_m').innerHTML="Are You Sure To Delete: <b>"+name+"</b>";
			id=i;	
		}
		function Delete()
		{
									$.ajax({ 
											type: 'POST', 
											url: 'http://localhost/rip/AdminPanel/services/delete_cat.php',  
											dataType: 'json',
											data:{'id':id},
											success: function (data)
											{ 
												if(data.success==1)
												{
														$("#modal-success").modal();
														console.log(data);
														
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
		function uploadCat()
		{
			
        if($('#cname').val()=="") {
			alert("Fill in category name");
		}
		else
			$.ajax({ 
					type: 'POST', 
					url: 'http://localhost/rip/AdminPanel/services/upload_cat.php',  
					dataType: 'json',
					data:{'cname':document.getElementById("cname").value,'gender':document.getElementById("genSelect").value},
					success: function (data)
					{ 
						if(data.success==1)
						{
								$("#modal-success_upload").modal();
								
						}
						else if(data.success==0)
						{
								$("#modal-failed_upload").modal();
								
						}
						console.log(data);
					},
					error: function(xhr, status, error)
					{
							console.log(xhr, status, error);
					//			location.reload();
					}
				});
		}
	</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $tohighlight="vc"; include("navside.php"); ?>
<?php $tosentResponse=false; include("./services/getCategory.php"); ?>
<?php $tosentResponse=false; include("./services/gettype.php"); ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      
      
      <!-- Main row -->
          <section >
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" >
              <h3 class="box-title">Add Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive table-responsive">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Category Name</th>
				  <th>Gender</th>
				  <th>Save</th>
                </tr>
                </thead>
                <tbody>
				<form>
					<tr>
					  <td> <input type="text" class="form-control" id="cname" placeholder="Name" name="cname" id="cname"  required></td>
					  <td>  <select class="form-control" placeholder="gender" id="genSelect" name="genSelect">
								 <?php
										for($i=0;$i<sizeof($response_type["type"]);$i++) 
										{
											echo '<option>'.$response_type["type"][$i]["type"].'</option>';
										}
									?>	
							  </select>
					  <td>
					  <button type="button" class="btn btn-primary" style="width:100%;"   id="save" onClick="uploadCat()">Save </button>
					  </td>
					</tr>
				</form>
       
                </tbody>
              </table>
            </div>
            <!-- /.Add Category onClick="uploadCat();" -->
          </div>
          <!-- /.box -->
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="box">
            <div class="box-header" style="background-color: #180333;color: white;">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Category Name</th>
				  <th>Gender</th>
				  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
					<?php 
							 for($i=0;$i<sizeof($response1["category"]);$i++) 
							{
								
								echo '<tr>
										 <td>'.($i+1).'</td>
										 <td>'.$response1["category"][$i]["C_NAME"].'</td>
										 <td>'.$response1["category"][$i]["gender"].'</td>
										  <td>
										  <a href="./editcat.php?id='.$response1["category"][$i]["C_ID"].'" style="text-decoration:none; color:green" class="pull-left"><i class="fa fa-edit" id="'.$response1["category"][$i]["C_ID"].'"></i></a>
										  <a data-toggle="modal" data-target="#modal-danger" style="text-decoration:none; cursor:pointer;color:red;" class="pull-right"><i class="fa fa-close" onClick="assign(\' '.$response1["category"][$i]["C_NAME"].' \','.$response1["category"][$i]["C_ID"].'  )"></i></a>
										  </td>
										</tr>';
							}
						?>
						
               
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

</div>

			  <div class="modal modal-danger fade" id="modal-danger">
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
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-outline" onClick="Delete()" data-dismiss="modal">Delete</button>
						  </div>
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
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.reload();">Close</button>
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
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" >Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>
			<div class="modal modal-success fade" id="modal-success_upload">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Category Added Successful</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								SuccessFully Added Category !
								
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.reload();">Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>
		<div class="modal modal-warn fade" id="modal-failed_upload">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Adding Category Failure</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Failed To Add Category
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" >Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>
		</section>
    </section>
  </div>
</div>
<!-- ./wrapper -->

<div class="modal modal-success fade" id="modal-success">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" aria-label="Close"  onClick="redirectplz();">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Category Added Successful</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								SuccessFully Added Category !
								
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" onClick="redirectplz();">Close</button>
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
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="redirectplz();">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Category Added Failure</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Failed To Add Category 
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal"  onClick="redirectplz();">Close</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>



<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
	
  });
  
   
 
</script>
</body>
</html>
