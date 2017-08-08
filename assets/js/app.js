$(document).ready(function(){

$(".pesquisa").click(function() {
    $( ".form_pesquisa_mobile" ).slideToggle( "fast" );
    $(" .form_pesquisa_mobile").css("background-color","#fff");
  });

});


$(document).ready(function(){
  $(".toggle").click(function(event){
    event.preventDefault();
      if ($(this).hasClass('on'))
        {
          $(this).removeClass('on');
            $("#menu").stop().fadeOut();
        }else{
                $(this).addClass('on');
                $("#menu").stop().fadeIn();
            }
  });

/*$(document).ready(function(){
 
      


  ajustaCapaBanner();
  //ajustaHeader()
});

$(window).resize(function(){
  ajustaCapaBanner();
});
//funcao do banner-header
function ajustaCapaBanner(){
  var destaqueCapaBigNewWidth = $(".slider").width();
  console.log(destaqueCapaBigNewWidth);
  if (destaqueCapaBigNewWidth<=1140){
    var destaqueCapaBigBaseWidth = 1140;
    var destaqueCapaBigBaseHeight = 538;
    var destaqueCapaBigNewHeight = (destaqueCapaBigNewWidth / destaqueCapaBigBaseWidth) * destaqueCapaBigBaseHeight;
  }else{
    destaqueCapaBigNewHeight = 538;
  };
  //$(".slider").css("height",destaqueCapaBigNewHeight+"px");
  //$(".slider .banner").css("height",destaqueCapaBigNewHeight+"px !important");
  $(".slider").css("height",destaqueCapaBigNewHeight+"px");
}
*/
$(document).ready(function(){

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

});

/*$(window).scroll(function() {
if ($(this).scrollTop() > 1){
    $('.header').addClass("sticky");
    $('.navbar .toggle').addClass("toggle-sticky");
    $('.navbar .menu').addClass("menu-mobile");
    $('.navbar .redes').addClass("sticky-redes");
    $('.navbar .pesquisa').addClass("sticky-pesquisa");
    $('.toggle span').css("width", "26px");
    $('.navbar .navbar-brand').css("padding", "9px 29px");
    $('.navbar .navbar-brand-blog').css("padding", "3px 33px");
    $('.navbar .icones-right').css("padding","3px 0px");
    $('.sticky-pesquisa').css("right","11%");
 

  }
  else{
    $('.header').removeClass("sticky");
    $('.navbar .toggle').removeClass("toggle-sticky");
    $('.navbar .menu').removeClass("menu-mobile");
    $('.navbar .redes').removeClass("sticky-redes");
    $('.navbar .pesquisa').removeClass("sticky-pesquisa");
    $('.toggle span').css("width", "30px");
    $('.navbar .navbar-brand').css("padding", "29px");
    $('.navbar .navbar-brand-blog').css("padding", "27px 33px");
    $('.navbar .icones-right').css("padding","37px 0px");
    $('.sticky-pesquisa').css("right","3%");
    }
});
*/
 });





