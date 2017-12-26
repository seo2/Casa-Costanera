$(window).scroll(function() {    
   var scroll = $(window).scrollTop();
   
   if (scroll >= 15) {
       $(".header").addClass("whitebg");
   } else {
       $(".header").removeClass("whitebg");
   }
});