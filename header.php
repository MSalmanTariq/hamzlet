	<head>
<title>HamzLet</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link rel="stylesheet" href="css/w3c.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
	<div id="snackbar">No product found! </div>
		<div id="snackbar2">Empty search box! </div>

		<script>
			function cartSubmit(){
			 window.open('checkout.php','_self');
		 }
	   </script>
<!-- header -->
<!-- <div class="header" id="home">
        <div class="container">
            <ul>
                <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 0342-2263722</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:hamzletonline@gmail.com">hamzletonline@gmail.com</a></li>
            </ul>
        </div>
    </div> -->
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			
					<input type="search" name="search" placeholder="Search here..." required="" id="search">
					<input type="submit" value=" " onclick="searchMe();">
				<div class="clearfix"></div>
			
		</div>
		<!-- header-bot -->
	
		
		  <div id="id01" class="w3-modal w3-animate-opacity">
			<div class="w3-modal-content w3-card-4">
			  <header class="w3-container w3-teal"> 
				<span onclick="document.getElementById('id01').style.display='none'" 
				class="w3-button w3-large w3-display-topright">&times;</span>
				<h2>Checkout</h2>
			  </header>
			  <div class="w3-container">
				

				<br/>
				<label>Customer Name:</label>
				<input class="w3-input" type="text">
				<br/>
				<label>Cell Number:</label>
				<input class="w3-input" type="text">
				<br/>

				<label>CNIC Number:</label>
				<input class="w3-input" type="text">
				<br/>
				<label>Address:</label>
				<input class="w3-input" type="text">
				<br/>
				<button class="w3-btn trans-btn" onclick="compTrans()"> Complete Transaction</button>
				<br/>
				<br/>
			  </div>
			
			
			</div>
		  </div>


		  <div id="id02" class="w3-modal">
			<div class="w3-modal-content">
			  <div class="w3-container">
				<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
				<h1 class="trans-head">Transaction Successfull</h1>
				
			  </div>
			</div>
		  </div>
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>H</span>amzLet <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
        <div class="container">
            <div class="top_nav_left">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav menu__list">
                                <li class="active menu__item" id="index"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                                <li class=" menu__item" id="about"><a class="menu__link" href="about.php">About</a></li>
                                <li class="dropdown menu__item" id="men">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="agile_inner_drop_nav_info">
                                            <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                                <a href="products/men/men-all.php"><img src="images/top2.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3 multi-gd-img">
                                                <ul class="multi-column-dropdown" id="menHolder">
                                                </ul>
                                            </div>
                                            <div class="col-sm-3 multi-gd-img">
                                               
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown menu__item" id="women">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="agile_inner_drop_nav_info">
                                            <div class="col-sm-3 multi-gd-img">
                                               <ul class="multi-column-dropdown" id="womenHolder">
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                                <a href="products/women/women-all.php"><img src="images/top1.jpg" alt=" "/></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                              <!--   <li class="menu__item dropdown">
                                    <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
                                    <ul class="dropdown-menu agile_short_dropdown">
                                        <li><a href="icons.html">Web Icons</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                    </ul>
                                </li> -->
                                <li class=" menu__item" id="contact"><a class="menu__link" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
				</nav>
				 <?php
    				echo '<script> document.getElementById("'.$highlight.'").className+=" menu__item--current"; </script>';  
  				 ?>
            </div>
            <div class="top_nav_right">
                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>	
		
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic2.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<script>
var mensCategorylist=[];
var mensClotheslist=[];
var womenCategorylist=[];
var tonavTo="";
function getli(inh,i,mf)
{
					var li = document.createElement('li');
					var a = document.createElement('a');
					 a.innerHTML=inh;
					 a.style.cursor='pointer';
					 a.clickable='true';
                     if(mf=='m')
					     a.href="./products/men/view.php?CID="+i;
                    else if(mf=='f')
					     a.href="./products/women/view.php?cid="+i;
					 a.onclick=function(){ tonavTo=i;};
					  a.id=""+i;
					 li.appendChild(a);
					return li;
}
window.onload = function() {
  $.ajax({ 
			type: 'GET', 
			url: 'http://localhost/rip/services/getCategory.php',  
			dataType: 'json',
			success: function (data)
			{
			console.log(data)
			for(let i=0;i<data.clothes.length;i++)
			{
				if(data.clothes[i].MF!=2)
				{
					mensCategorylist.push({'name':data.clothes[i].C_NAME,'id':data.clothes[i].C_ID});
					
				
					 document.getElementById('menHolder').appendChild(getli(data.clothes[i].C_NAME.toUpperCase(),data.clothes[i].C_ID,'m'));
					 if(data.clothes[i].MF!=1)
                     {
                         womenCategorylist.push({'name':data.clothes[i].C_NAME,'id':data.clothes[i].C_ID});
					     document.getElementById('womenHolder').appendChild(getli(data.clothes[i].C_NAME.toUpperCase(),data.clothes[i].C_ID,'f'));
                     }
					 
					
				}
				else if(data.clothes[i].MF==2)
				{
					 document.getElementById('womenHolder').appendChild(getli(data.clothes[i].C_NAME.toUpperCase(),data.clothes[i].C_ID));;
			    	womenCategorylist.push({'name':data.clothes[i].C_NAME,'id':data.clothes[i].C_ID});				
				}
			}
			
				  $.ajax(
				  { 
						type: 'GET', 
						url: 'http://localhost/rip/services/getMenClothes.php',  
						dataType: 'json',
						success: function (data)
						{
							for(let i=0;i<data.clothes.length;i++)
								mensClotheslist.push(data.clothes[i]);
						
						},
						error: function(xhr, status, error)
						{

						console.log(error);
						}
				});
			},
			error: function(xhr, status, error)
			{

			console.log(error);
			}
		
	});
	
};
	
</script>
