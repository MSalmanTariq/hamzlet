/* 
 $(document).ready(function(){
    
            $("#search").keyup(function(){
                searchHighlight($(this).val());
            });
        });
function searchHighlight(searchText){

    if(searchText){

        var content = $("h4").text();
        var searchExp = new RegExp(searchText, "ig");
        var matches = content.match(searchExp);
        console.log(matches);
       

        var size = Object.size(matches);
        console.log(size);

        if(matches){
            $("h4").html(content.replace(searchExp,function(match){
                return "<span class = 'search-highlight'>"+match+"</span>" 
            }));
        }
        

       
    }
    else{
        $(".search-highlight").removeClass("search-highlight");
    }
}

Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};

 */
$("#search").keyup(function(){
    var ex = ($(this).val());
    console.log(ex)
    if(ex===""){
       clearSearch();
    }
});
var searchFlag=false;
function searchMe(){
    clearSearch();
    var text=document.getElementById('search').value;
    if(text===""){
        showError2();
        return;
    }
   
    var splitText = text.toLowerCase().split(" ");
    var title = document.getElementsByClassName('product-title');
   console.log(splitText);
    var i=0;
    var j = 0;
    var x = 0;
    var flag=false;
    var oneflag=false;
    for(i=0;i<title.length;i++){
       for(j=0;j<splitText.length;j++){
        var splitTitle = title[i].innerHTML.toLowerCase().split(" ");
            for(x=0;x<splitTitle.length;x++){
                if(splitText[j]===splitTitle[x]){
                    console.log(title[i].innerHTML);
                    flag=true;
                    title[i].setAttribute('class','product-title search-highlight');
                    searchFlag=true;
                    if(oneflag==false){
                    var rect = title[i].getBoundingClientRect();
                    scrollTo(0,rect.top-400);
                    oneflag=true;
                }
                }
            }
       }
    }

    if(flag==false){
        console.log("result not found");
        showError();
        searchFlag=false;
    }




}


function clearSearch(){
    if(searchFlag==true){
    var title = document.getElementsByClassName('product-title');
    var c = 0;
    for(c=0;c<title.length;c++){
        title[c].setAttribute('class','product-title');
    }
    searchFlag=false;
}
}


function showError() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
}
function showError2() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar2")

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
}



function hh(){
    document.getElementById('id01').style.display='block';
    paypal.minicart.view.hide();
}

function compTrans(){
    document.getElementById('id02').style.display='block';
    document.getElementById('id01').style.display='none';
    paypal.minicart.reset();
}