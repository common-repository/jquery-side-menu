

jQuery(document).ready(function($) {		

	var mydrag = new Draggable('sidebar_wrapper', {constraint: 'vertical', handle: 'handle' });

		//Hide some elements at startup
		jQuery("#site_holder > ul > li").slideUp();
		jQuery("#mb_credit").hide("fast");
		
		jQuery("#network_sidebar_holder").click(function() {
			
			var $a=jQuery("#network_sidebar_holder").css("margin-left");
			
			
			if($a=="-180px"){
				/*SHOW SIDEBAR*/
				//rotate image
				jQuery("#switcher").rotate({ angle:0,animateTo:180});
				
				jQuery(this).stop().animate({marginLeft:"0px"},800);
				jQuery("#site_holder").css({"display":"block"});
				
	
				var $i;
				$i=500;
				jQuery("#site_holder > ul > li").delay(1000).each(function(index, element) {
					jQuery(this).delay($i).slideDown(200);
                     jQuery(this).addClass('animated flipInY');
				   $i+=300;
                });
				jQuery("#mb_credit").delay(6000).show("slow");
				
			} else {
				/*HIDE SIDEBAR*/
				
				//rotate image back to original state
				jQuery("#mb_credit").clearQueue();
				jQuery("#switcher").rotate({ angle:180,animateTo:360});
				
				jQuery("#site_holder > ul > li").stop().slideUp("fast");
				jQuery(this).delay(1000).animate({marginLeft:"-180px"},800);

				jQuery("#mb_credit").hide("fast");
				
				setTimeout(function() {
					jQuery("#site_holder").css({"display":"none"});
				}, 2000);
			}
			});
	
	});