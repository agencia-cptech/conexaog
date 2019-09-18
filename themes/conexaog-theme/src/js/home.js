jQuery(document).ready(function(){
  jQuery(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 50) {
        jQuery("#navbar").addClass("navbar-alternative");
      } else {
        jQuery("#navbar").removeClass("navbar-alternative");
      }
    });
  }); 
});

var width = jQuery(window).width();

jQuery(".burger").click(function() {
  jQuery(this).toggleClass("activated");
  
  if(width >= 320 && width <= 768){
    if(jQuery(".menu-menu-topo-container").hasClass('menu-slide')){
      jQuery(".menu-menu-topo-container").animate({display: 'none', width: '0%'}).removeClass('menu-slide');
    } else {
      jQuery(".menu-menu-topo-container").animate({display: 'flex', width: '100%'}).addClass('menu-slide');
    }
  }
});

jQuery(".navbar-item").click(function() {
  if(width >= 320 && width <= 768){
    jQuery(".menu-menu-topo-container").animate({display: 'none', width: '0%'}).removeClass('menu-slide');
    jQuery(".burger").toggleClass("activated");
  }
});

jQuery('a[href*=\\#]').on('click', function(event){     
  event.preventDefault();
  var menu = jQuery('#navbar').height() + jQuery('#wpadminbar').height() + 24;
  jQuery('html,body').animate({scrollTop: jQuery(this.hash).offset().top - menu}, 1000);
});
