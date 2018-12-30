$(window).scroll(function(){
  if ($(document).scrollTop() > $(".main-menu").height()) {
    $(".main-menu").addClass("fixed-top");
  } else {
    $(".main-menu").removeClass("fixed-top");
  }
});

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop:true,
    width: 100,
    height: 100,
    items:1
  });
});
