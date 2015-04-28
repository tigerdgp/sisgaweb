// JavaScript Document
/*$(document).ready(function() {  
              
                $(".link").on("click", function() {  
                    var divId = this.id + "_div";                     
                    changeDivContent(divId, this.name);  
                });  
                  
                function changeDivContent(id, linkname) {  
                    $("#"+id).html("value changed by " + linkname);  
                }  
                  
                  
            }); 
function show(id) {
	$("."+id).css('display','none');
}*/

$(function(){
    $(".btn-toggle").click(function(e){
        e.preventDefault();
        el = $(this).data('element');
        $(el).toggle();
    });
});