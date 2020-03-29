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
    // varaibles for sticky navbar
    var navbar = $('.navbar'),
        header = $('.header-top'),
        headerBottom = header.offset().top + header.innerHeight(),
        // variables for scroll to top button
        scrollButton = $('.scroll_top'),
        page = $('html');



    $(navbar).css({
        top: header.innerHeight()
    });

    $(window).on('scroll', function () {

        if ($(window).scrollTop() >= headerBottom) {
            $(navbar).css({
                position: 'fixed',
                top: '0'
            });
        } else {
            $(navbar).css({
                position: 'absolute',
                top: header.innerHeight()
            });
        }

    });


    //***************** Start show/ hide search bar ********************
    $('.search_close_open').on('click', function () {
        $('.search_bar').slideToggle(0);

        //-------------- show / hide close icon ---------

        $('.search_close_open').toggleClass('opacity_0');
    });
    //***************** End show/ hide search bar *****************
});

//add to cart 
function addtocart(title){
    var shopnbrtag = document.getElementById('shopcartnbr');
    shopnbrtag.textContent = Number(shopnbrtag.textContent) + 1;

    if (shopnbrtag.classList.contains('badge-primary')){
        shopnbrtag.classList.remove('badge-primary');
        shopnbrtag.classList.add('badge-warning');
    }
    var modalbody = document.getElementById('modal-body');
    modalbody.textContent = title +  " à éte ajouter a votre panier";
}


// remove to prod 

function removeFromCart(idRowLivre){
    var Livre = document.getElementById(idRowLivre);
    Livre.classList.add('d-none');
    var products = document.getElementsByClassName('product');
    var myalertDiv = document.getElementById('aucunproduit');

    if(products.length == 0) {
        myalertDiv.classList.remove('d-none');
    }
}