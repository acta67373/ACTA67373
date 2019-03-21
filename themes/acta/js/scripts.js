jQuery(document).ready(function($) {
  jQuery('.flexslider').flexslider({
    animation: "slide"
  });
  //Fixes IE HTML5 form placeholder issues
  jQuery('input, textarea').placeholder();
  
	//Reorder home page blocks for to move news
	jQuery('.second-right-blocks > .post-block:nth-child(3)').detach().insertAfter('.second-right-blocks > .block:nth-child(1)');
	jQuery('.second-right-blocks > .post-block:nth-child(4)').detach().insertAfter('.second-right-blocks > .block:nth-child(2)');

  //menu toggle script
	jQuery('.menu-toggle').on('click', function(ev) {
		jQuery(this).toggleClass('active');
    ev.preventDefault();
	});
  
  //Search toggle for header
  jQuery('.search-toggle').click(function(){
    var clicks = jQuery(this).data('clicks');
    if (clicks) {
      jQuery('.search-box').slideToggle("fast");
      jQuery('.search-toggle').removeClass('active-toggle');
    } else {
      jQuery('.search-box').slideToggle("fast");
      jQuery('.search-toggle').addClass('active-toggle');
    }
    jQuery(this).data("clicks", !clicks);
  });
  
  //Show only 1-2 items from feeds for mobile, 5 for wider screens.
  //Prob a better way to write this but it's working.
  
  if (jQuery(window).width() < 770) {
    jQuery(".traffic-alerts ul li").slice( 2 ).css( "display", "none" );
    jQuery(".construction-updates ul li").slice( 2 ).css( "display", "none" );
    jQuery(".events-block ul li").slice( 2 ).css( "display", "none" );
  }
 
  else {
    jQuery(".traffic-alerts ul li").slice( 2 ).css( "display", "block" );
    jQuery(".construction-updates ul li").slice( 2 ).css( "display", "block" );
    jQuery(".events-block ul li").slice( 2 ).css( "display", "block" );
  }

  jQuery(window).resize(function() {
    if (jQuery(window).width() < 770) {
      jQuery(".traffic-alerts ul li").slice( 2 ).css( "display", "none" );
      jQuery(".construction-updates ul li").slice( 2 ).css( "display", "none" );
      jQuery(".events-block ul li").slice( 2 ).css( "display", "none" );
    }
    else {
      jQuery(".traffic-alerts ul li").slice( 2 ).css( "display", "block" );
      jQuery(".construction-updates ul li").slice( 2 ).css( "display", "block" );
      jQuery(".events-block ul li").slice( 2 ).css( "display", "block" );
    }   
      
  });
    
});
