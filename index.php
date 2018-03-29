

<!DOCTYPE html>
<html>
<head>
<title>HamzLet</title>
<script> 
							function signUp()
							{
								if(document.getElementById('signup_pass').value==document.getElementById('signup_repass').value)
								{
									$.ajax({ 
											type: 'GET', 
											url: 'http://localhost/rip/services/signup.php',  
											dataType: 'json',
											data:{'userName':document.getElementById('signup_email').value,'password':document.getElementById('signup_pass').value},
											success: function (data)
											{ 
												alert(data.message);
												
											},
											error: function(xhr, status, error)
											{
												
												console.log(error);
											}
										});
								}
								else
								{
									alert('Password does not match');
								}
								//alert(document.getElementById('signup_email').value+","+document.getElementById('signup_pass').value+","+document.getElementById('signup_repass').value);
							}
						function signUp1()
						{
							$.ajax({ 
										type: 'GET', 
										url: 'http://localhost/rip/services/login.php',  
										dataType: 'json',
										data:{'userName':document.getElementById('login_email').value,'password':document.getElementById('login_pass').value},
										success: function (data)
										{ 
											alert(data.message);
											
										},
										error: function(xhr, status, error)
										{
											
											console.log(error);
										}
									});
						}
						</script>
						<script>
							function login()
							{
							//alert('userName':document.getElementById('login_email').value,'password':document.getElementById('login_pass').value);
							/*		$.ajax({ 
											type: 'GET', 
											url: 'http://localhost/rip/services/login.php',  
											dataType: 'json',
											data:{'userName':document.getElementById('login_email').value,'password':document.getElementById('login_pass').value},
											success: function (data)
											{ 
												alert(data.message);
												
											},
											error: function(xhr, status, error)
											{
												
												console.log(error);
											}
										});
								*/
								//alert(document.getElementById('signup_email').value+","+document.getElementById('signup_pass').value+","+document.getElementById('signup_repass').value);
							}
						</script>
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
<body>
	<?php
        $highlight="index";
        include_once ('./header.php'); 
	?>
	
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="products/men/men-all.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="products/men/men-all.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="products/men/men-all.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="products/men/men-all.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="products/men/men-all.php">Shop Now </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 
	<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/bottom1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/bottom2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	<!-- schedule-bottom -->
	<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<img src="images/mid.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3>Save up to <span>50%</span> in this week</h3>
				<p>Suspendisse varius turpis efficitur erat laoreet dapibus. 
					Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Customers</h4>
					<h5 class="counter">653</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Events</h4>
					<h5 class="counter">823</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Awards</h4>
					<h5 class="counter">45</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>
	
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="products/women/women-all.php">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="images/bb1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="products/men/men-all.php">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="images/bottom3.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
		        </div>
				</a>
				<a href="products/men/men-all.php">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="images/bottom4.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 65%</p>
							</figcaption>		
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="products/men/men-all.php"><img src="images/bot_1.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
					
			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="products/men/men-all.php"><img src="images/bot_2.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>							
<!--/grids-->
<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Men's</li>
							<li> Women's</li>
						
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
<?php
            $tosentResponse=false;
            include './services/getMenClothes.php';
            for($i=0;$i<sizeof($response["clothes"]);$i++) 
		    {
                if($response["clothes"][$i]['isNew']==1)
					echo '<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
			                      <div class="men-thumb-item">
                                        <img src="./'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-front">
                                         <img src="./'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-back">
                             <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="./products/men/detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('MALE').'" class="link-product-add-cart">Quick View</a>
                                    
                                              </div>
                                        </div>
                                        <span class="product-new-top">New</span>
            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="./products/men/detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('MALE').'" class="product-title">'.$response["clothes"][$i]["P_Description"].'</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">Rs:'.$response["clothes"][$i]["P_PRICE"].'</span>
                                            
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                            <form action="#" method="post">
                                                 <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value=" ">
                                                    <input type="hidden" name="item_name" value="'.$response["clothes"][$i]["P_Description"].'">
                                                    <input type="hidden" name="amount" value="'.$response["clothes"][$i]["P_PRICE"].'">
													<input type="hidden" name="pid" value="'.$response["clothes"][$i]["id"].'">
                                                    <input type="hidden" name="discount_amount" value="0">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <input type="hidden" name="return" value=" ">
                                                    <input type="hidden" name="cancel_return" value=" ">
                                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                                </fieldset>
                                            </form>
                                        </div>
            
                                    </div>
                                </div>
                            </div>';
                            if($i>=6) break;
        }
						?>	
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->



						
						<!--/tab_two-->
						<div class="tab2">
							 <?php
            $tosentResponse=false;
            include './services/getWomenClothes.php';
            for($i=0;$i<sizeof($response["clothes"]);$i++) 
		    {
                if($response["clothes"][$i]['isNew']==1)
					echo '<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
			                      <div class="men-thumb-item">
                                        <img src="./'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-front">
                                         <img src="./'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-back">
                             <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="./products/women/detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('FEMALE').'" class="link-product-add-cart">Quick View</a>
                                    
                                              </div>
                                        </div>
                                        <span class="product-new-top">New</span>
            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="./products/women/detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('FEMALE').'" class="product-title">'.$response["clothes"][$i]["P_Description"].'</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">Rs:'.$response["clothes"][$i]["P_PRICE"].'</span>
                                            
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                            <form action="#" method="post">
                                                 <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value=" ">
                                                    <input type="hidden" name="item_name" value="'.$response["clothes"][$i]["P_Description"].'">
                                                    <input type="hidden" name="amount" value="'.$response["clothes"][$i]["P_PRICE"].'">
                                                    <input type="hidden" name="discount_amount" value="0">
                                                    <input type="hidden" name="currency_code" value="USD">
													<input type="hidden" name="pid" value="'.$response["clothes"][$i]["id"].'">
                                                    <input type="hidden" name="return" value=" ">
                                                    <input type="hidden" name="cancel_return" value=" ">
                                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                                </fieldset>
                                            </form>
                                        </div>
            
                                    </div>
                                </div>
                            </div>';
                            if($i>=6) break;
        }
						?>	
						
							<div class="clearfix"></div>
						</div>
					 <!--//tab_two-->
						
					
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>
 
				<a class="hvr-outline-out button2" href="single.html">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->
<!--/grids-->
<div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE SHIPPING</h3>
                        <p>Across all over Pakistan</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>24/7 SUPPORT</h3>
                        <p>Over call, website and email</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>On all products according to policiy</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE GIFT COUPONS</h3>
                        <p>With promotions and different products</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
<!--grids-->
<!-- footer -->
<div class="footer">
        <div class="footer_agile_inner_info_w3l">
            <div class="col-md-3 footer-left">
                <h2><a href="../../../index.php"><span>H</span>amzLet </a></h2>
                <p>Description</p>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                    <li>
                        <a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 footer-right">
                <div class="sign-grds">
                    <div class="col-md-5 sign-gd">
                        <h4>Our <span>Information</span> </h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products/men/mens-all.html">Men's Wear</a></li>
                            <li><a href="products/women/womens-all.html">Women's wear</a></li>
                            <li><a href="about.php">About</a></li>
                          
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6 sign-gd-two">
                        <h4>Store <span>Information</span></h4>
                        <div class="w3-address">
                            <div class="w3-address-grid">
                                <div class="w3-address-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="w3-address-right">
                                    <h6>Phone Number</h6>
                                    <p>(+92)342-22-637-22</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="w3-address-grid">
                                <div class="w3-address-left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="w3-address-right">
                                    <h6>Email Address</h6>
                                    <p>Email :<a href="mailto:hamzletonline@gmail.com"> hamzletonline@gmail.com</a></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="w3-address-grid">
                                <div class="w3-address-left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="w3-address-right">
                                    <h6>Location</h6>
                                    <p>Store # 214B , Tariq Road Karachi, Pakistan

                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 sign-gd flickr-post">
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div> -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="agile_newsletter_footer">
                <div class="col-sm-6 newsleft">
                    <h3>SIGN UP FOR NEWSLETTER !</h3>
                </div>
                <div class="col-sm-6 newsright">
                    <form action="#" method="post">
                        <input type="email" placeholder="Enter your email..." name="email" required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div class="clearfix"></div>
            </div>
            <p class="copy-right">&copy 2017 HamzLet. All rights reserved </p>
        </div>
    </div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/app.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
