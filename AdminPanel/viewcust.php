<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <title>HAMZLET | View Customers</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $tohighlight="vct"; include("navside.php"); ?>
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
          <section >
			  <div class="row">
				<div class="col-xs-12">
				  
				  <div class="box">
					<div class="box-header">
					  <h3 class="box-title">Customers</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
						  <th>Sr No.</th>
						  <th>USER NAME</th>
						  <th>CNIC</th>
						  <th>PHONE #</th>
						  <th>ADDRESS</th>
						  <th>EMAIL</th>
						  <th>ZIP CODE</th>
						</tr>
						</thead>
						<tbody>
							<?php 
							 $tosentResponse=false; include("./services/getCustomers.php"); 
							 for($i=0;$i<sizeof($response["customer"]);$i++) 
							{
								
								echo '<tr>
										 <td>'.($i+1).'</td>
										 <td>'.$response["customer"][$i]["name"].'</td>
										 <td>'.$response["customer"][$i]["cnic"].'</td>
										 <td>'.$response["customer"][$i]["cell"].'</td>
										 <td>'.$response["customer"][$i]["address"].'</td>
										 <td>'.$response["customer"][$i]["email"].'</td>
										<td>'.$response["customer"][$i]["zipcode"].'</td>
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
			</section>
			  <!-- /.row -->
    </section>
  </div>
</div>
<!-- ./wrapper -->

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
  })
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