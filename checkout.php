<!DOCTYPE html>
<html>
<head>
<title>HamzLet</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        include_once ('./checkout-header.php'); 
	?>
  

<br>
<br>
<br>
        <div class="row">
            <div class="col-md-6">
                <img src="images/cart.png" alt="cart" class="center-block">
                <button type="button" class="btn btn-warning btn-lg center-block " style="margin-top:30px;" onclick="w3_open();">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        Review Items</button>

                    <br>
                
                    
                        <div >
                                
                            <a href="https://www.paypal.com/pk/home" target="_blank" >
                              <img src="images/paypal.png" alt="paypal payment" class="center-block"></a>
                            </div>
            </div>
        <div class="col-md-5 col-md-offset-0 " style="padding-left:0px;">
<form method="post">
   <h2>For Cash on Delivery</h2>
   <br>
    <div class="form-row">
      <div class="form-group col-md-12" style="padding-left:0px;">
        <label for="inputName1">Name</label>
        <input type="text" class="form-control" id="inputName1" name="name" placeholder="First Name" required>
      </div>
      <div class="form-group col-md-12" style="padding-left:0px;">
        <label for="inputName2">Email</label>
        <input type="email" class="form-control" id="inputName2" name="email" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Cell No.</label>
      <input type="number" class="form-control" id="inputAddress2" placeholder="035450" required name="cell">
    </div>

    <div class="form-row">
		<div class="form-group col-md-9" style="padding-left:0px;">
      <label for="inputAddress3">CNIC.</label>
      <input type="number" class="form-control" id="inputAddress3" placeholder="035450" required name="cnic">
    </div>
      <div class="form-group col-md-3" style="padding-left:0px;">
        <label for="inputZip">Zip</label>
        <input type="number" class="form-control" id="inputZip" placeholder="eg: 74700" name="zip" required>
      </div>
    </div>
   
    <button type="submit" class="btn btn-success pull-right btn-lg" style="margin-top:10px;" >
           Checkout</button>  
  </form>
<br>
<br>

</div>
</div>
<!-- <div>
    <ul id="list-items">
onclick="checkDone();"
    </ul>
</div> -->
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
            <h2><a href="../../../index.html"><span>H</span>amzLet </a></h2>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products/men/mens-all.html">Men's Wear</a></li>
                        <li><a href="products/women/womens-all.html">Women's wear</a></li>
                        <li><a href="about.html">About</a></li>
                      
                        <li><a href="contact.html">Contact</a></li>
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
		
		var createAllErrors = function() {
        var form = $( this );

        var showAllErrorMessages = function() {
           

            // Find all invalid fields within the form.
            var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

				
                // Find the field's corresponding label
                var label = $( "label[for=" + node.id + "] "),
                    // Opera incorrectly does not fill the validationMessage property.
                    message = node.validationMessage || 'Invalid value.';

            });
			if(!invalidFields)checkDone();
			
        };

        // Support Safari
        form.on( "submit", function( event ) {
		 if ( this.checkValidity && !this.checkValidity() ) {
			
                $( this ).find( ":invalid" ).first().focus();
				
                event.preventDefault();
            }
        });

        $( "input[type=submit], button:not([type=button])", form )
            .on( "click", showAllErrorMessages);

        $( "input", form ).on( "keypress", function( event ) {
			
            var type = $( this ).attr( "type" );
            if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
              && event.keyCode == 13 ) {
				  
				console.log( invalidFields);
                showAllErrorMessages();
            }
        });
    };
    
    $( "form" ).each( createAllErrors );
</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/cart.js"></script>
</body>
</html>
<?php 
  
	if(isset($_POST['name']) )
	{
		
		require_once __DIR__ .'/services/config.php';
		$custId="";
		$Query="select * from `customer` where `CNIC`='".$_POST['cnic']."'";
		if($Result=mysqli_query($connection,$Query))
		if(mysqli_num_rows($Result)>0)
		{
				while ($row = mysqli_fetch_array($Result)) 
							$custId=$row["CID"];
						echo "<script>	addtoDb(".$custId."); </script>";	
		}
		else
		{
			$Query="INSERT INTO `customer`( `C_Name`, `C_Cell`, `C_Address`, `CNIC`, `email`, `zipcode`) VALUES ('".$_POST['name']."',".$_POST['cell'].",'".$_POST['address']."','".$_POST['cnic']."','".$_POST['email']."','".$_POST['zip']."')";
			 if($Result2=mysqli_query($connection,$Query))
			 {		
				$query="SELECT max(`CID`) as api FROM `customer` ";
				$result1 = mysqli_query($connection,$query);		
				if (mysqli_num_rows($result1) > 0)
				{
					while ($row = mysqli_fetch_array($result1)) 
							$custId=$row[0];
					echo "<script>	addtoDb(".$custId."); </script>";	
				}
				else
					$response["success"] = 0;
			 }
			 else
			 {
				 echo '<script> alert("Failed to register");</script>'; 
				
			 }
		}		 
	}
	
?>