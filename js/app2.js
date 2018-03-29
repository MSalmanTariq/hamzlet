
 $(document).ready(function(){
    
            $("#search").keyup(function(){
                searchHighlight2($(this).val());
            });
        });
function searchHighlight2(searchText){

    if(searchText){

        var content = $("h1").text();
        var searchExp = new RegExp(searchText, "ig");
        var matches = content.match(searchExp);
        console.log(matches);
       

        var size = Object.size(matches);
        console.log(size);

        if(matches){
            $("h1").html(content.replace(searchExp,function(match){
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


