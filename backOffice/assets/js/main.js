// loading screen
$(window).on('load',function()
{
    //loading elemnet
    $(".loading-overlay .spinner").fadeOut(1000,
    function()  
    {
           $(this).parent().fadeOut(1000,
           function()
           {
                //SHOW THE ELEMENT
                $("body,html").css("overflow","auto");
                $(this).remove();
            });  
    });
});





// filter image   //
$(document).ready(function(){

    $(".filter").click(function(){
        var name = $(this).attr("data-filter");
        if(name == "all"){
            $(".filters").show("2000");
        }
        else {
            $(".filters").not("."+name).hide("2000");
            $(".filters").filters("."+name).show("2000");
        }
    });
});