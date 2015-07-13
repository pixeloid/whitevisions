//= require "_modernizr.custom.27778"
//= require "jquery"
//= require "swiper"
//= require "bootstrap"
//= require "bootstrap-tabcollapse"
//= require "_jquery.sticky-kit"
//= require "_jquery.zoomslider"
//= require "floatlabel.js/floatlabels.js"
//= require "bootstrap-datepicker"
//= require "iCheck"
//= require "_picturefill.min.js"
//= require "responsive-toolkit"

!function(a){a.fn.datepicker.dates.hu={days:["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","Péntek","Szombat","Vasárnap"],daysShort:["Vas","Hét","Ked","Sze","Csü","Pén","Szo","Vas"],daysMin:["Va","Hé","Ke","Sz","Cs","Pé","Sz","Va"],months:["Január","Február","Március","Április","Május","Június","Július","Augusztus","Szeptember","Október","November","December"],monthsShort:["Jan","Feb","Már","Ápr","Máj","Jún","Júl","Aug","Sze","Okt","Nov","Dec"],today:"Ma",weekStart:1,format:"yyyy.mm.dd"}}(jQuery);


+function ($, viewport) {


	$(document).ready(function () {

		$('#home, .wrapper').hide();

		var swiper1;
		var swiper2;


		var swiperConfig = {
			nextButton: '#gallery-eskuvo .swiper-button-next',
			prevButton: '#gallery-eskuvo .swiper-button-prev',
			slidesPerView: 'auto',
			centeredSlides: true,
			paginationClickable: true,
	        spaceBetween: 1,
	        preloadImages: true,
	        autoplayDisableOnInteraction: false
		};

		if(viewport.is('>xs')){
			swiperConfig.autoplay = 2500;	
		}

		swiper1 = new Swiper('#gallery-eskuvo .swiper-container', swiperConfig);

		swiperConfig.nextButton = '#gallery-beauty .swiper-button-next';
		swiperConfig.prevButton = '#gallery-beauty .swiper-button-prev';

		swiper2 = new Swiper('#gallery-beauty .swiper-container', swiperConfig);






		$('#home').css({'height':($(window).height())+'px'}).insertBefore('.wrapper');
		$('.wrapper').css({'margin-top':($(window).height())+'px'});

		$('.swiper-slide img').height($(window).height()-150);

		$(window).resize(function(){

			if( viewport.is('<=xs') ) return false;

			$('#home').css({'height':($(window).height())+'px'});
			$('.swiper-slide img').height($(window).height()-150);

			swiper1.update();
			swiper2.update();

			$(document.body).trigger("sticky_kit:recalc");

			var anchor, href;
			var activeLinks = $('#top-nav-collapse li.active > a')
			if(activeLinks.length) {

				for (var i = 0; i < activeLinks.length; i++) {

					href = $(activeLinks[i]).attr('href')
					if(href != '#') anchor = href;
				}
				  $('html, body').animate({
				  	scrollTop: $(anchor).offset().top -70
				  }, 0)
			} else {
			  // Fragment doesn't exist
			}

		})


	    $('#info-eskuvo').tabCollapse();
	    $('#info-beauty').tabCollapse();




	    $('#top-nav .nav > li').eq(Math.floor($('#top-nav .nav > li').length / 2) - 1).addClass('center');

	    $('.navbar-fixed-top a').click(function(event) {
	    	event.preventDefault();
	        var $anchor = $(this);
	        var $target = $($anchor.attr('href'));
	        if($target.length){

	        	$target = ($($anchor.attr('href')).attr('id').indexOf("info") > -1 && viewport.is('<=xs')) ? $($anchor.attr('href')).parent() : $($anchor.attr('href'));

	        	$('html, body').stop().animate({
	        	    scrollTop: $target.offset().top - 70
	        	}, 400);
	        }

	    });


	    // Highlight the top nav as scrolling occurs
	    $('body').scrollspy({
	        target: '.navbar-fixed-top',
	        offset: $('.navbar-fixed-top').height() + 110
	    })

	    // Closes the Responsive Menu on Menu Item Click
	    $('.navbar-collapse ul li:not(.dropdown) a').click(function() {
	        $('.navbar-toggle:visible').click();
	    });




	    $(document).on("shown.bs.collapse shown.bs.tab", ".panel-collapse, a[data-toggle='tab']", function(el){
	    	
	    	var $this = $(this);
	    	
	    	var $targetEl = $this.attr('href') ? $($this.attr('href')) : $this; 


	    	$('html, body').stop().animate({
	    	    scrollTop: $targetEl.offset().top - (viewport.is('<=xs') ? 120 : 145)
	    	}, 400);

	    })


	    if( viewport.is('>xs') ) {


    	    $('.nav-list li.active a').each(function(){
    	    	$(this).closest('aside').find('img').attr('src', $($(this).attr('href')).find('img').attr('src'));
    	    })

    	    
    	    $(document).on("shown.bs.collapse shown.bs.tab", ".panel-collapse, a[data-toggle='tab']", function(el){
    	    	
    	    	var $this = $(this);

    	    	$(this).closest('aside').find('img').attr('src', $($(this).attr('href')).find('img').attr('src'));

    	    	$(document.body).trigger("sticky_kit:recalc");


    	    })

    	    $('.datepicker').datepicker({
    	    	language: "hu",
    	    	container: "#contact-form"
    	    })


	    }



	    // $('#info-eskuvo .nav-list a').first().tab('show');
	    // $('#info-beauty .nav-list a').first().tab('show');

	    $(document.body).trigger("sticky_kit:recalc");

	    // $('input, textarea').each(function(){
	    // 	var l = $(this).parent().find('label');
	    // 	$(this).attr('placeholder', l.text().replace(':', ''))
	    // 	l.remove();
	    // })

	    $('input, textarea').floatlabel({
			labelEndTop: -20,
			paddingOffset: 0
	    });


	    $('input').iCheck({
	      checkboxClass: 'icheckbox_square-blue',
	      radioClass: 'iradio_square-blue',
	      increaseArea: '20%' // optional
	    });





	    $(window).load(function() {

	    	$('#home, .wrapper').fadeIn();
	    	$('.la-ball-clip-rotate').hide();

	    	if( viewport.is('>xs') ) {

	    		$("[data-sticky_column]").stick_in_parent({
	    				parent: "[data-sticky_parent]",
	    				offset_top: 50,
	    				recalc_every: 1
	    		})
	    	}

	    	swiper1.update();
	    	swiper2.update();



	    });


	    $(window).scroll(function(){
	    	if(this.scrollY > $(window).height()) 
	    		$('#top-nav').addClass('inverse') 
	    	else 
	    		$('#top-nav').removeClass('inverse');

	    })

	});


	


}(jQuery, ResponsiveBootstrapToolkit);


