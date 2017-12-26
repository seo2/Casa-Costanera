$(document).ready(function () {
 
                $(".anchorLink").click(function () {
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                });        
 
               
                jQuery('.anchorLink2').click(function (event) {
                    event.stopPropagation();                
                    var idTo = jQuery(this).attr('data-atr');                
                    var Position = jQuery('[id="' + idTo + '"]').offset().top;
                    jQuery('html, body').animate({ scrollTop: Position }, 'slow');
                    return false;
                });
});


