

<!DOCTYPE html>
<html>

<head>
    <title>Buy <?php echo $response["clothes"][0]["P_Description"] ?> | Hamzlet</title>
    <!--/tags -->
    <?php 
    $tosentResponse=false;
    include '../../services/getparticularcloth.php';
  
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- //tags -->
    <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="../../css/flexslider.css" type="text/css" media="screen" />
    <link href="../../css/font-awesome.css" rel="stylesheet">
    <link href="../../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- //for bootstrap working -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
</head>

<body>
  <?php
        $highlight="women";
        include_once ('./header.php'); 
    ?>

    <!--/single_page-->
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Women's <span><?php echo $cat_name; ?></span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                            <li><a href="../../index.php">Home</a><i>|</i><a href="../../products/women/women-all.php"> <?php echo $_GET['MF']; ?> Wear</a><i>|</i></li>
                        <li><?php echo $response["clothes"][0]["P_Description"] ; ?></li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">

                        <ul class="slides">
                            <?php 
                                for($i=0;$i<sizeof($response["clothes"][0]["I_Url"]);$i++)
                                {
                                    echo  '<li data-thumb="../../'.$response["clothes"][0]["I_Url"][$i].'">
                                             <div class="thumb-image"> <img src="../../'.$response["clothes"][0]["I_Url"][$i].'" data-imagezoom="true" class="img-responsive">                                    </div>
                                        </li>';
                                }
                            ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3><?php echo $response["clothes"][0]["P_Description"]; ?></h3>
                <p><span class="item_price"><?php echo $response["clothes"][0]["P_PRICE"]; ?></span>

                </p>
                <div class="rating1">
                    <span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
                            <label for="rating1">1</label>
                            <?php echo "
                            <script> document.getElementById('rating".$response['clothes'][0]['popularity']."').checked = true</script>"
                            ?>
						</span>
                </div>
                <div class="description">
                    <h5>Check delivery, payment options and charges at your location</h5>
                    <form action="#" method="post">
                        <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}"
                            required="">
                        <input type="submit" value="Check">
                    </form>
                </div>
                <!-- Size 1 -->
                <div class="occasional">
                    <h5>Size :</h5>
                    <div class="colr-pant ert">
                        <label class="radio"><input type="radio" name="radio" checked=""><i></i>6</label>
                    </div>
                    <div class="colr-pant">
                        <label class="radio"><input type="radio" name="radio"><i></i>7</label>
                    </div>
                    <div class="colr-pant">
                        <label class="radio"><input type="radio" name="radio"><i></i>8</label>
                    </div>
                    <div class="colr-pant">
                        <label class="radio"><input type="radio" name="radio"><i></i>9</label>
                    </div>
                    <div class="colr-pant">
                        <label class="radio"><input type="radio" name="radio"><i></i>10</label>
                    </div>
                    <div class="colr-pant">
                        <label class="radio"><input type="radio" name="radio"><i></i>11</label>
                    </div>
                    <div class="colr-pant">
                        <label class="radio"><input type="radio" name="radio"><i></i>12</label>
                    </div>
                   
                    <div class="clearfix"> </div>
                </div>
                <!-- //Size 1 -->


                <!-- Size 2 -->

               <!--  <div class="occasional">
                        <h5>Size :</h5>
                        <div class="colr-pant ert">
                            <label class="radio"><input type="radio" name="radio" checked=""><i></i>38</label>
                        </div>
                        <div class="colr-pant">
                            <label class="radio"><input type="radio" name="radio"><i></i>39</label>
                        </div>
                        <div class="colr-pant">
                            <label class="radio"><input type="radio" name="radio"><i></i>40</label>
                        </div>
                        <div class="colr-pant">
                            <label class="radio"><input type="radio" name="radio"><i></i>41</label>
                        </div>
                        <div class="colr-pant">
                            <label class="radio"><input type="radio" name="radio"><i></i>42</label>
                        </div>
                        <div class="colr-pant">
                            <label class="radio"><input type="radio" name="radio"><i></i>43</label>
                        </div>
                        <div class="colr-pant">
                            <label class="radio"><input type="radio" name="radio"><i></i>44</label>
                        </div>
                        <div class="colr-pant">
                            <label class="radio"><input type="radio" name="radio"><i></i>45</label>
                        </div>
                        <div class="clearfix"> </div>
                    </div> -->

                     <!-- // Size 2 -->
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="<?php echo $response["clothes"][0]["P_Description"]; ?>">
                                <input type="hidden" name="amount" value="<?php echo $response["clothes"][0]["P_PRICE"]; ?>">
								<input type="hidden" name="pid" value="<?php echo $response["clothes"][0]["id"]; ?>">
                                <input type="hidden" name="discount_amount" value="0">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="return" value=" ">
                                <input type="hidden" name="cancel_return" value=" ">
                                <input type="submit" name="submit" value="Add to cart" class="button">
                            </fieldset>
                        </form>
                    </div>

                </div>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                    <li class="share">Share On : </li>
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
            <div class="clearfix"> </div>
            <!-- /new_arrivals -->
            <div class="responsive_tabs_agileits">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Description</li>
                        <li>Reviews</li>
                        <li>ReTurn Policy</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">

                            <div class="single_page_agile_its_w3ls">
                                <h6><?php echo $response["clothes"][0]["P_Description"] ?></h6>
                        

                            </div>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">

                            <div class="single_page_agile_its_w3ls">
                                <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                        <div class="bootstrap-tab-text-grid-left">
                                            <img src="../../images/t1.jpg" alt=" " class="img-responsive">
                                        </div>
                                        <div class="bootstrap-tab-text-grid-right">
                                            <ul>
                                                <li><a href="#">Admin</a></li>
                                                <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue
                                                eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                                suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                                                vel eum iure reprehenderit.</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="add-review">
                                        <h4>add a review</h4>
                                        <form action="#" method="post">
                                            <input type="text" name="Name" required="Name">
                                            <input type="email" name="Email" required="Email">
                                            <textarea name="Message" required=""></textarea>
                                            <input type="submit" value="SEND">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab3">

                            <div class="single_page_agile_its_w3ls">
                                <h6><?php echo $response["clothes"][0]["P_Description"];?></h6>
                                <br>
                                <p><b>7 Days Return & Refund - No questions asked</b></p>

                                <p> If you are not perfectly satisfied, then call our customer service on (+92) 342-22-637-22
                                    to return the product for a full refund within 7 days of delivery.</p>
                                <br>
                                <p> <b>Conditions for Returns</b></p>
                                <p>
                                    <ol class="product-inf">
                                        <li>The product must be unused, unworn, unwashed and without any flaws. Fashion products
                                            can be tried on to see if they fit and will still be considered unworn.</li>
                                        <li>The product must include the original tags, user manual, warranty cards, freebies
                                            and accessories.</li>
                                        <li>The product must be returned in the original and undamaged manufacturer packaging
                                            / box. If the product was delivered in a second layer of Daraz packaging, it
                                            must be returned in the same condition with return shipping label attached. Do
                                            not put tape or stickers on the manufacturer box.</li>
                                    </ol>
                                </p>
                                <p>If a product is returned to us in an inadequate condition, we reserve the right to send it
                                    back to you.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //new_arrivals -->
            <!--/slider_owl-->
<!-- Related items  -->
            <div class="w3_agile_latest_arrivals">
                    <h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
<?php
            $tosentResponse=false;
            include '../../services/getWomenClothes.php';
            for($i=0;$i<sizeof($response["clothes"]);$i++) //$response["clothes"][$i]["I_Url"]
		    {
                if($response["clothes"][$i]['isNew']==1)
                 echo   '<div class="col-md-3 product-men single">
                            <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="../../'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-front">
                                         <img src="../../'.$response["clothes"][$i]["I_Url"][0].'" alt="" class="pro-image-back">
                             <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="./detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('FEMALE').'" class="link-product-add-cart">Quick View</a>
                                    
                                              </div>
                                        </div>
                                        <span class="product-new-top">New</span>
            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="./detail.php?id='.$response["clothes"][$i]["id"].'&MF='.strtoupper('FEMALE').'" class="product-title">'.$response["clothes"][$i]["P_Description"].'</a></h4>
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
													<input type="hidden" name="pid" value="'.$response["clothes"][$i]["id"].'">
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
                    <div class="clearfix"> </div>
                    <!--//slider_owl-->
                </div>
        </div>
    </div>
    <!--//single_page-->
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
                <h2><a href="index.php"><span>H</span>amzLet </a></h2>
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
    <!-- single -->
    <script src="../../js/imagezoom.js"></script>
    <!-- single -->
    <!-- script for responsive tabs -->
    <script src="../../js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
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
    <!-- FlexSlider -->
    <script src="../../js/jquery.flexslider.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
    <!-- //script for responsive tabs -->
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