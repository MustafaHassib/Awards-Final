
//Defaults
  $(".top-nav").css("backgroundColor","transparent");
  $(".navbar").css("backgroundColor","transparent");
  // $(".nav-link").css("color","white");
  // $(".top-nav a").css("color","white");

$(window).scroll(function(){

    var section2 = $('.mob-section2').offset().top;

    var scrollT = $(window).scrollTop(); //how far from top

    if (scrollT >= section2)
        {
            $(".navbar").css("backgroundColor","#f4f7f6");
             $(".top-nav").css("backgroundColor","#f4f7f6");
            // $(".top-nav a").css("color","#20212190");
            //  $(".nav-link").css("color","#20212190");
            // $(".lang-switch-div").css("border","none");  
        }
    else{
         $(".top-nav").css("backgroundColor","transparent");
        $(".navbar").css("backgroundColor","transparent");
          // $(".nav-link").css("color","white");
          //  $(".top-nav a").css("color","white");

    }
})
