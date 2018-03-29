/* var list = document.getElementById('list-items');

var finalItems = paypal.minicart.cart.items();

var i =0;

for(i=0;i<finalItems.length;i++){
  var li = document.createElement('li');
  var liText = document.createTextNode(finalItems[i]._data.item_name);
  li.appendChild(liText);
  list.appendChild(li);
    
} */

function review_items(){
    paypal.minicart.view.show();
}

function w3_open() {


    var divDel = document.getElementById('side-item-review');
    while(divDel.firstChild){
        divDel.removeChild(divDel.firstChild);
    } //remove previous list


    var list = document.getElementById('side-item-review');
    
    var finalItems = paypal.minicart.cart.items();
	console.log(paypal.minicart.cart.items());
    var i =0;
    var totalItem = 0;
    
    for(i=0;i<finalItems.length;i++){
        var div = document.createElement('div');
        div.setAttribute('class','review-item-div')
      var h4 = document.createElement('h4');
      h4.setAttribute('class','review-item-head');
      var h4Text = document.createTextNode(finalItems[i]._data.item_name);
      h4.appendChild(h4Text);

      var quantity = document.createElement('h5');
      quantity.setAttribute('class','review-item-quantity');
      var quatText = document.createTextNode("Quantity: "+finalItems[i]._data.quantity);
      quantity.appendChild(quatText);

      div.appendChild(h4);
      div.appendChild(quantity);
        /* div.appendChild(document.createElement('br')); */
        div.appendChild(document.createElement('hr'));
      list.appendChild(div);
     totalItem=totalItem+finalItems[i]._data.quantity;
        
    }
    var total = document.createElement('h4');
    var totalText = document.createTextNode("Total item: "+totalItem);
    total.setAttribute('class',"review_items-total");
    total.appendChild(totalText);
    list.appendChild(total);
   

    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
  }
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
  }

  function cartSubmit(){
      window.open('checkout.php');
  }

/*   function checkoutBtn(){
      var fname = document.getElementById('inputName1');
      var lname = document.getElementById('inputName2');
      var add1 = document.getElementById('inputAddress1');
      var add2 = document.getElementById('inputAddress2');
      var city = document.getElementById('inputCity');
      var zip = document.getElementById('inputZip');



  }
 */
  function checkDone(){
    document.getElementById('id01').style.display='block';
    paypal.minicart.reset();
    setTimeout(function() {
        window.open('index.php','_self');
    }, 4000);
  }
  function addtoDb(cid)
  {
	/*  if(!cid || cid=='undefined')
	  {
		  alert("Failed to transact");
		  return ;
	  }*/
	var d = new Date().toUTCString();
	let data=[];
	for(let i=0;i<paypal.minicart.cart.items().length;i++)
	{
			data.push({'date':d,'pid':JSON.parse(paypal.minicart.cart.items()[i]._data.pid),'price':paypal.minicart.cart.items()[i]._data.amount,'quantity':paypal.minicart.cart.items()[i]._data.quantity,'total':paypal.minicart.cart.items()[i]._amount * paypal.minicart.cart.items()[i]._data.quantity,'cid':cid});
			console.log(paypal.minicart.cart.items()[i]._data.pid);
		
	}
	data=JSON.stringify(data);
	  
$.ajax({ 
				type: 'POST', 
				url: 'http://localhost/rip/services/addtocart.php',  
				dataType: 'json',
				data:{'data':data},
				success: function (data)
				{ 
					if(data.success==1)
						checkDone();
					else
						alert("Failed to transact");
					
				},
				error: function(xhr, status, error)
				{
					
					console.log(error);
				}
			});

  }