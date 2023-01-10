
(function($) { 
	"use strict";
	
	(function($) {
$(function() {
jQuery('#loopedSlider').prepend("<a href='#' class='previous'>&lt;</a><a href='#' class='next'>&gt;</a>");
	jQuery('#loopedSlider').loopedSlider({
		autoHeight: 500
	});
});
});



// for banner height js
var windowWidth = $(window).width();
    var windowHeight =$(window).height();
    $('.banner').css({'width':windowWidth ,'height':windowHeight -"60" });
	
	


// for portfoli filter jquary
$(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});




// for portfoli lightbox jquary
jQuery(function($) {
	var $chosenSheet,
	$stylesheets = $( "a[id^=theme-]" );
	
	// run rlightbox
	$( ".lb" ).rlightbox();
	$( ".lb_title-overwritten" ).rlightbox({overwriteTitle: true});
});





// for skill chat jquary
$(document).ready(function(e) {
//var windowBottom = $(window).height();
var index=0;
$(document).scroll(function(){
	var technicalTop = $('.technical').height()-$(window).scrollTop();
    var mapTop = $('.mapArea').height()-$(window).scrollTop();
	//console.log(top)
	if(technicalTop<-300){
		if(index==0){	
			
			$('.chart').easyPieChart({
				easing: 'easeOutBounce',
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
			
		}
		index++;
	}
    if(technicalTop<-300){
        // $("#google_map").show();
        // google.maps.event.trigger(map, "resize");
    }
})
//console.log(nagativeValue)
});




// Somth page scroll
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -60
        }, 1000);
        return false;
      }
    }
  });
});




// chart loding
$(window).load(function() {
	
	var chart = window.chart = $('.chart').data('easyPieChart');
	$('.js_update').on('click', function() {
		chart.update(Math.random()*100);
	});
});





//jQuery
$(window).load(function() {    

        var theWindow        = $(window),
            $bg              = $(".bannerImg");
            //aspectRatio      = $bg.width() / $bg.height();

        function resizeBg() {
                if ( theWindow.width() < theWindow.height() ) {
                    $bg
                        .removeClass()
                        .addClass('bgheight');
                } else {
                    $bg
                        .removeClass()
                        .addClass('bgwidth');
                }
        }

        theWindow.resize(resizeBg).trigger("resize");

});
}(jQuery));

jQuery(function($) {
    $(document).ready( function() {
        //enabling stickUp on the '.navbar-wrapper' class
        $('.navbar-wrapper').stickUp({
            parts: {
                0: 'banner',
                1: 'aboutme',
                2: 'technical',
                3: 'exprience',
                4: 'education',
                //5: 'protfolio',
                5: 'contact'
            },
            itemClass: 'menuItem',
            itemHover: 'active',
            topMargin: 'auto'
        });

        $('#google_map').hide();
    });

    $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
      $( ".navbar-collapse" ).addClass( "hideClass" );
    });


    $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
      $( ".navbar-collapse" ).addClass( "collapse" );
    });


    $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
      $( ".navbar-collapse" ).removeClass( "in" );
    });

    $( ".navbar-toggle" ).click(function() {
      $( ".navbar-collapse" ).removeClass( "hideClass" );
    });
});

// var position = [55.9448263, 14.1583764];
/*var position = [56.0293936, 14.156677800000011];
function showGoogleMaps() {
    var latLng = new google.maps.LatLng(position[0], position[1]);
    var mapOptions = {
        zoom: 9,
        center: latLng,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        styles: [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-17},{"gamma":0.36}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#3f518c"}]}]
    }
    map = new google.maps.Map(document.getElementById('google_map'), mapOptions);
}
google.maps.event.addDomListener(window, 'load', showGoogleMaps);*/
