
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
					     a.href="view.php?CID="+i;
                    else if(mf=='f')
					     a.href="../women/view.php?cid="+i;
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
			for(let i=0;i<data.clothes.length;i++)
			{
				if(data.clothes[i].MF!=2)
				{
					mensCategorylist.push({'name':data.clothes[i].C_NAME,'id':data.clothes[i].C_ID});
					
				
					 document.getElementById('menHolder').appendChild(getli(data.clothes[i].C_NAME.toUpperCase(),data.clothes[i].C_ID,'m'));
					if( document.getElementById('listholder')!=null)
					 document.getElementById('listholder').appendChild(getli(data.clothes[i].C_NAME.toUpperCase(),data.clothes[i].C_ID,'m'));
					 if(data.clothes[i].MF!=1)
                     {
                         womenCategorylist.push({'name':data.clothes[i].C_NAME,'id':data.clothes[i].C_ID});
					     document.getElementById('womenHolder').appendChild(getli(data.clothes[i].C_NAME.toUpperCase(),data.clothes[i].C_ID,'f'));
                     }
					 
					
				}
				else if(data.clothes[i].MF==2)
				{
					  document.getElementById('womenHolder').appendChild(getli(data.clothes[i].C_NAME.toUpperCase(),data.clothes[i].C_ID,'f'));
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

