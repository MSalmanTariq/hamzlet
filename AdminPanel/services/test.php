
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
	let data='[{name:"hamza"},{name:"mirza"}';
        	$.ajax({ 
				type: 'POST', 
				url: 'http://localhost/rip/AdminPanel/services/test1.php',  
				dataType: 'json',
				data:{'data':data},
				success: function (data)
				{ 
					document.write(data);
					
				},
				error: function(xhr, status, error)
				{
					
					console.log(error);
				}
			});
			                  
        });

			
</script>