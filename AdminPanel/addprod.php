<!DOCTYPE html>
<html>
<head>
   <title>HAMZLET | Add Products</title>
	<style>
		.form-group {
			border-right-style: none !important;
			box-shadow:0px 0px 0px transparent !important;
			border: 0 !important;
		
		.profile-user-img1{margin:1px; width:100% !important;} 
		.image .cross
		{
				position: relative;
			top: 20px;
			font-weight: 400;
			font-size: 0.8em;
		}
		.image img
		{
			min-width:150px;
		}
	</style>
	
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $tohighlight="ap"; include("navside.php"); ?>
<div class="wrapper">
  <div class="content-wrapper">
  <section class="content-header">
      <h1 style="text-align:center; margin-bottom:10px; border-bottom:2px solid purple; padding-bottom:18px;">
        Add Product
        <small>Control panel</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-10">
               <form class="form-horizontal" action="./services/uploadprod.php" method="POST"  enctype="multipart/form-data">
			  
				<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName"  required="true"  placeholder ="Name" name="name" >
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="inputDes" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="des" id="inputDes"  required="true"  placeholder ="Description" >
                    </div>
                  </div>
				  
					<div class="form-group">
                    <label for="inputP_PRICE" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputP_PRICE" name="price"  required="true"  placeholder ="price">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputisNew" class="col-sm-2 control-label">Is New</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" max="1" min="0" id="inputisNew" name="isnew"  required="true"  placeholder ="is New" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label" >Popularity</label>

                     <div class="col-sm-10">
                       <select class="form-control"  required="true"  placeholder ="Popularity" id="popSelect" name="popSelect">
							<option selected>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						  </select>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Category</label>

                    <div class="col-sm-10">
                       <select class="form-control"  required="true"  placeholder ="gender"  id="catSelect" name="catSelect">
						 <?php
							$tosentResponse=false;
							 include("./services/getCategory.php");
							for($i=0;$i<sizeof($response1["category"]);$i++) 
							{
								echo '<option>'.$response1["category"][$i]["C_NAME"].'</option>';
								if($response["clothes"][0]["cat_name"]==$response1["category"][$i]["C_NAME"])
									echo '<script> document.getElementById("catSelect").selectedIndex='.$i.'; </script>';
							}
						?>	
						  </select>
						   
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Gender</label>

                    <div class="col-sm-10">
                        <select class="form-control"  required="true"  placeholder ="gender" id="genSelect" name="genSelect">
							 <?php
									$tosentResponse=false;
									 include("./services/getGender.php");
									for($i=0;$i<sizeof($response2["gender"]);$i++) 
									{
										echo '<option>'.$response2["gender"][$i]["gender"].'</option>';
										if($response["clothes"][0]["gender"]==$response2["gender"][$i]["gender"])
											echo '<script> document.getElementById("genSelect").selectedIndex='.$i.'; </script>';
									}
								?>	
						  </select>
                    </div>
                  </div>
				    <div class="form-group">
						 <div class="col-md-10 col-md-offset-1" id="previewHolder">
						  </div>
						  <div class="col-md-8 col-md-offset-4">
								<label for="inputEmail" class="col-sm-4 control-label">Upload Images</label>
								<input type="file" id="fileLoader" name="image[]" title="Load File" multiple />		
						  </div>	
                  </div>
				  <br />
				
				  
                  <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-5">
                      <button type="submit" id="save" class="btn btn-lg btn-danger" style="width:100%;" >Submit</button>
                    </div>
				
                  </div>
				  	
                </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

</div>
<script>
var files=0;
$(function () {
    
	$('#fileLoader').change(function(e){
            files=e.target.files.length;
		
        });
	
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
			
        };

        // Support Safari
        form.on( "submit", function( event ) {
			if(files<=0)
			{
				alert("Select atleast 1 image");
				event.preventDefault();
			}
            else if ( this.checkValidity && !this.checkValidity() ) {
			
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
</body>
</html>
