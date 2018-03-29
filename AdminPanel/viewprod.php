

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <title>HAMZLET | View Products</title>
	<script>
		var id=0,uri=[],ids=[];
		function assign(name,url,i,arr)
		{
			document.getElementById('para_m').innerHTML="Are You Sure To Delete: <b>"+name+"</b>";
			document.getElementById('img_m').src="./../"+url[0];
			id=i;	
			uri=url;
			console.log(uri);
			ids=arr
		}
		function Delete()
		{
									$.ajax({ 
											type: 'POST', 
											url: 'http://localhost/rip/AdminPanel/services/delete_prod.php',  
											dataType: 'json',
											data:{'id':id,'url':uri,'ids':ids},
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
<?php $tohighlight="vp"; include("navside.php"); ?>
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      
      
      <!-- Main row -->
          <section >
		  <?php $tosentResponse=false; include("./services/getClothes.php"); ?>
		  <?php $tosentResponse=false; include("./services/getCategory.php"); ?>
			  <div class="row">
				<div class="col-xs-12">
				  <div class="box">
					<div class="box-header">
					  <h3 class="box-title">Data Table With Full Features</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
						  <th>Sr No.</th>
						  <th>Product Name</th>
						  <th>Price</th> 
						  <th>Popularity</th>
						  <th>Gender</th>
						  <th>IsNew</th>
						  <th>Image</th>
						  <th>Description</th>
						  <th>Actions</th>
						</tr>
						</thead>
						<tbody>
						<?php 
							 for($i=0;$i<sizeof($response["clothes"]);$i++) 
							{
								$arrId=($response["clothes"][$i]["I_ids"]);
								
								
								echo '<tr>
										 <td>'.($i+1).'</td>
										 <td>'.$response["clothes"][$i]["pro_name"].'</td>
										 <td>'.$response["clothes"][$i]["P_PRICE"].'</td>
										 <td>'.$response["clothes"][$i]["popularity"].'</td>
										 <td>'.$response["clothes"][$i]["gender"].'</td>
										 <td>'.$response["clothes"][$i]["isNew"].'</td>
										  <td><img class="img-responsive" src="./../'.$response["clothes"][$i]["I_Url"][0].'" alt="img" style="max-width:90px; max-height:90px;"></td>
										   <td>'.$response["clothes"][$i]["P_Description"].'</td>
										  <td>
										  <a href="./editprod.php?id='.$response["clothes"][$i]["id"].'" style="text-decoration:none; color:green" class="pull-left"><i class="fa fa-edit" id="'.$response["clothes"][$i]["id"].'"></i></a>
										  <a data-toggle="modal" data-target="#modal-danger" style="text-decoration:none; cursor:pointer;color:red;" class="pull-right"><i class="fa fa-close" onClick="assign(\''.$response["clothes"][$i]["pro_name"].'\',[\'' . implode('\', \'', $response["clothes"][$i]["I_Url"]) . '\'],'.$response["clothes"][$i]["id"].',['.implode(",",$arrId).'] )"></i></a>
										  </td>
										</tr>';
							}
						?>
						
					   
						</tbody>
					  </table>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
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
							 <img class="img-responsive" id="img_m" alt="img" style="max-width:90px; max-height:90px; margin: 0 auto;" >	
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
						<h4 class="modal-title">Insertion Successful</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								SuccessFully Added !
								
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="location.href='./viewprod.php">Close</button>
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
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
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
						<h4 class="modal-title">Product Added Successful</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								SuccessFully Added Product !
								
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
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="location.href='./viewprod.php'">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Product Added Failure</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Failed To Add Product 
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal"  onClick="location.href='./viewprod.php'">Close</button>
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
    })
  });
function redirectplz()
{
	location.href="./viewprod.php";
}
</script>
</body>
</html>
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
<?php
	if( isset($_REQUEST["success"]) )
	{
		if( $_REQUEST["success"]==0 )
			echo '<script> $("#modal-failed").modal();</script>';
		else if( $_REQUEST["success"]==1 )
			echo '<script> $("#modal-success").modal();</script>';
		unset($_REQUEST["success"]);
	}
?>