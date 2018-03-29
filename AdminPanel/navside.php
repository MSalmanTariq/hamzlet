
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/fastclick/lib/fastclick.js"></script>
	<script src="dist/js/adminlte.min.js"></script>
	<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	

</head>
	  <header class="main-header">
			<a href="index.php" class="logo">
			  <span class="logo-mini"><b>H</b>LT</span>
			  <span class="logo-lg logo_agile"><span>H</span>amzLet</a></a>
			</a>
			<nav class="navbar navbar-static-top">
			  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			  </a>
			  <div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
				  <li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  <img  class="user-image u_img" alt="User Image" >
					  <span class="hidden-xs username" ></span>
					</a>
					<ul class="dropdown-menu">
					  <li class="user-header">
						<img class="img-circle u_img" alt="User Image">
						<p>
						  <span  class="username"></span> - hamzlets
						</p>
					  </li>
					  <li class="user-body" style="background-color:#000;">
						<div class="row">
						  <div class="col-xs-12 text-center logo_agile">
							<a href="#"><span>H</span>amzLet</a></a>
						  </div>
						</div>
					  </li>
					  <li class="user-footer">
						<div class="pull-left">
						  <a href="profile.php" class="btn " style="background-color:#220117!important; color:thistle; text-shadow:0px 0px 1px #e50000; font-family:cursive; box-shadow:0px 0px 9px white;">Profile</a>
						</div>
						<div class="pull-right">
						  <a id="logout" class="btn" style="background-color:#1c191b!important; color:thistle; text-shadow:0px 0px 1px #e50000; font-family:cursive; box-shadow:0px 0px 9px white;">Sign out</a>
						</div>
					  </li>
					</ul>
				  </li>  
				</ul>
			  </div>
			</nav>
	  </header>
	  
	  <aside class="main-sidebar">
		<section class="sidebar">
		  <div class="user-panel">
			<div class="pull-left image">
			  <img class="img-circle u_img" alt="User Image">
			</div>
			<div class="pull-left info">
			  <span class="username" style=" padding-left: 12px;"></span><br />
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			 
			</div>
		  </div>
		  <ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="active treeview menu-open">
			  <a href="#">
				<i class="fa fa-dashboard"></i> <span>Actions</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li id="vp" ><a href="viewprod.php"><i class="fa fa-circle-o"></i>View Products</a></li>
				<li id="vc"><a href="viewcat.php"><i class="fa fa-circle-o"></i> View Categories</a></li>
				<li id="vt"><a href="viewtran.php"><i class="fa fa-circle-o"></i> View Transactions</a></li>
				<li id="vct"><a href="viewcust.php"><i class="fa fa-circle-o"></i> View Customers</a></li>
				<li id="ap"><a href="addprod.php"><i class="fa fa-circle-o"></i> Add Products</a></li>
			  </ul>
			</li>
		  </ul>
		</section>
	  </aside>
	  
	  <div class="control-sidebar-bg"></div>

	  <?php 
		if($tohighlight!="home")
			echo '<script> document.getElementById("'.$tohighlight.'").className="active"; </script>';
	  ?>
 <script>
		 String.prototype.capitalize = function() {
			return this.charAt(0).toUpperCase() + this.slice(1);
		}
	
		var user=JSON.parse(localStorage.getItem("user"));
			setUserDetails("no");
		function setUserDetails(email)
		{
			
		
			if(user!=null)
			{
				if(user.isLogin=="0" && user.rem=="0")
					location.href="./login.php";
				else if(user.isLogin=="0" && user.rem=="1")
					location.href="./lockscreen.php";
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
			}
			else
					location.href="./login.php";
		}
</script>