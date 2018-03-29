
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <title>HAMZLET | Dashboard</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $tohighlight="home"; include("navside.php"); ?>
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1 style="text-align:center; margin-bottom:10px; border-bottom:2px solid purple; padding-bottom:18px;">
       Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    <section class="content">
          <section >
			  <div class="row">
				<div class="col-xs-12">
				  <div class="box">
					<div class="box-header">
					  <h3 class="box-title">Data Table With Full Features</h3>
					</div>
					<div class="box-body">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
						  <th>Rendering engine</th>
						  <th>Browser</th>
						  <th>Platform(s)</th>
						  <th>Engine version</th>
						  <th>CSS grade</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						  <td>Trident</td>
						  <td>Internet
							Explorer 4.0
						  </td>
						  <td>Win 95+</td>
						  <td> 4</td>
						  <td>X</td>
						</tr>
						<tr>
						  <td>Trident</td>
						  <td>Internet
							Explorer 5.0
						  </td>
						  <td>Win 95+</td>
						  <td>5</td>
						  <td>C</td>
						</tr>
						<tr>
						  <td>Trident</td>
						  <td>Internet
							Explorer 5.5
						  </td>
						  <td>Win 95+</td>
						  <td>5.5</td>
						  <td>A</td>
						</tr>
						<tr>
						  <td>Trident</td>
						  <td>Internet
							Explorer 6
						  </td>
						  <td>Win 98+</td>
						  <td>6</td>
						  <td>A</td>
						</tr>
					   
						</tbody>
						<tfoot>
						<tr>
						  <th>Rendering engine</th>
						  <th>Browser</th>
						  <th>Platform(s)</th>
						  <th>Engine version</th>
						  <th>CSS grade</th>
						</tr>
						</tfoot>
					  </table>
					</div>
				  </div>
				</div>
			  </div>
    </section>
    </section>
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<!-- DataTables -->
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