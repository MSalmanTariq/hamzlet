
<!DOCTYPE html>
<html>

<head>
    <title>HamzLet </title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!--//tags -->
    <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="../../css/jquery-ui.css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../css/font-awesome.css" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
</head>

<body>
   <?php
        $highlight="men";
        include_once ('./header.php'); 
    ?>
    <!-- //Modal2 -->
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Men's <span>Wear  </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="../../index.php">Home</a><i>|</i></li>
                        <li>Men's Wear</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- mens -->
            <div class="col-md-4 products-left">
                <div class="filter-price">
                    <h3>Filter By <span>Price</span></h3>
                    <ul class="dropdown-menu6">
                        <li>
                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>
				
                <div class="css-treeview">
                    <h4>Categories</h4>
                    <ul class="tree-list-pad">
                        <li>
						     <ul>
                                <li id="listholder">
								
   
                                </li>
							</ul>
                    </li>
                    </ul>
                </div>
                <div class="community-poll">
                    <h4>Community Poll</h4>
                    <div class="swit form">
                        <form>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label>                                    </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div>
                            </div>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
                <h5>Product <span>Compare(0)</span></h5>
                <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sort By</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Default</option>
						<option value="null">Name(A - Z)</option> 
						<option value="null">Name(Z - A)</option>
						<option value="null">Price(High - Low)</option>
						<option value="null">Price(Low - High)</option>	
						<option value="null">Model(A - Z)</option>
						<option value="null">Model(Z - A)</option>					
					</select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sorting">
                        <h6>Showing</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option> 
						<option value="null">28</option>					
						<option value="null">35</option>								
					</select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-top">

                    <div id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src="../../images/banner2.jpg" alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src="../../images/banner5.jpg" alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src="../../images/banner2.jpg" alt=" " />
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="../../images/bb2.jpg" alt=" " />
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4>Exclusive Men's <span>Wear</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
        
<?php
    $tosentResponse=false;
    include '../../services/getMenClothes.php';
		for($i=0;$i<sizeof($response["clothes"]);$i++) //$response["clothes"][$i]["I_Url"]
		{
            $new="";
            if($response["clothes"][$i]['isNew']==1) $new='<span class="product-new-top">New</span>';
			echo '<div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="../../'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-front">
                            <img src="../../'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="./detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('MALE').'" class="link-product-add-cart">Quick View</a>
                                    
                                </div>
                            </div>
                          '.$new.'

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="./detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('MALE').'" class="product-title">'.$response["clothes"][$i]["P_Description"].'</a></h4>
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
		}
        
?>
                




            </div>

</div> <!-- phla -->

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //mens -->
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
                <h2><a href="../../index.php"><span>H</span>amzLet </a></h2>
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
                            <li><a href="../../index.php">Home</a></li>
                            <li><a href="../../products/men/men-all.php">Men's Wear</a></li>
                            <li><a href="../../products/women/women-all.php">Women's wear</a></li>
                            <li><a href="../../about.php">About</a></li>

                            <li><a href="../../contact.php">Contact</a></li>
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
                                    <p>Store # 214B , Tariq Road Karchi, Pakistan

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
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}"
                                            required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"
                                            required="">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"
                                            required="">

                                    </div>
                                    <div class="sign-up">
                                        <input type="submit" value="REGISTER NOW">
                                    </div>

                                </form>
                            </div>
                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                <form>
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}"
                                            required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"
                                            required="">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="single-bottom">
                                        <input type="checkbox" id="brand" value="">
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <div class="sign-in">
                                        <input type="submit" value="SIGNIN">
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
    <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
    <script src="../../js/app.js"></script>
    <!-- //js -->
    <script src="../../js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <script src="../../js/modernizr.custom.js"></script>
    <!-- Custom-JavaScript-File-Links -->
    <!-- cart-js -->
    <script src="../../js/minicart.min.js"></script>
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
    <!---->
    <script type='text/javascript'>
        //<![CDATA[ 
        $(window).load(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [1000, 7000],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        });//]]>
    </script>
    <script type="text/javascript" src="../../js/jquery-ui.js"></script>
    <!---->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="../../js/move-top.js"></script>
    <script type="text/javascript" src="../../js/jquery.easing.min.js"></script>
    <script type="text/javascript">
                            jQuery(document).ready(function ($) {
                                $(".scroll").click(function (event) {
                                    event.preventDefault();
                                    $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
                                });
                            });

    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
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
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <script src="../../services/nav.js"></script>
</body>

</html>

