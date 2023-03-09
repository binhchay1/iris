
$(document).ready(function(){
    $('.hero-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
    });
    
  
    $('.menu-btn').click(function(){
      $('.main-menu').addClass('show');
      return false;
    })
    
    $('.close-menu').click(function(){
      $('.main-menu').removeClass('show');
      return false;
    })
  
    $(document).click(function(e) 
    { 
    var target = e.target; 
    if (!$(target).is('.main-menu') && !$(target).parents().is('.main-menu')) 
      {
        $('.main-menu').removeClass('show');
       }
    });
  
  
    $("[href^='#']").click(function() {
        id=$(this).attr("href")
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 300);
    });
  
  
  });
  