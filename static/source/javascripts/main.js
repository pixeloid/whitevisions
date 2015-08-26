//= require "_modernizr.custom.27778"
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
//= require "jquery-placeholder"
//= require "jquery.imageScroll.js"

!function(a){a.fn.datepicker.dates.hu={days:["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","Péntek","Szombat","Vasárnap"],daysShort:["Vas","Hét","Ked","Sze","Csü","Pén","Szo","Vas"],daysMin:["Va","Hé","Ke","Sz","Cs","Pé","Sz","Va"],months:["Január","Február","Március","Április","Május","Június","Július","Augusztus","Szeptember","Október","November","December"],monthsShort:["Jan","Feb","Már","Ápr","Máj","Jún","Júl","Aug","Sze","Okt","Nov","Dec"],today:"Ma",weekStart:1,format:"yyyy.mm.dd"}}(jQuery);

if("document" in self){if(!("classList" in document.createElement("_"))){(function(j){"use strict";if(!("Element" in j)){return}var a="classList",f="prototype",m=j.Element[f],b=Object,k=String[f].trim||function(){return this.replace(/^\s+|\s+$/g,"")},c=Array[f].indexOf||function(q){var p=0,o=this.length;for(;p<o;p++){if(p in this&&this[p]===q){return p}}return -1},n=function(o,p){this.name=o;this.code=DOMException[o];this.message=p},g=function(p,o){if(o===""){throw new n("SYNTAX_ERR","An invalid or illegal string was specified")}if(/\s/.test(o)){throw new n("INVALID_CHARACTER_ERR","String contains an invalid character")}return c.call(p,o)},d=function(s){var r=k.call(s.getAttribute("class")||""),q=r?r.split(/\s+/):[],p=0,o=q.length;for(;p<o;p++){this.push(q[p])}this._updateClassName=function(){s.setAttribute("class",this.toString())}},e=d[f]=[],i=function(){return new d(this)};n[f]=Error[f];e.item=function(o){return this[o]||null};e.contains=function(o){o+="";return g(this,o)!==-1};e.add=function(){var s=arguments,r=0,p=s.length,q,o=false;do{q=s[r]+"";if(g(this,q)===-1){this.push(q);o=true}}while(++r<p);if(o){this._updateClassName()}};e.remove=function(){var t=arguments,s=0,p=t.length,r,o=false,q;do{r=t[s]+"";q=g(this,r);while(q!==-1){this.splice(q,1);o=true;q=g(this,r)}}while(++s<p);if(o){this._updateClassName()}};e.toggle=function(p,q){p+="";var o=this.contains(p),r=o?q!==true&&"remove":q!==false&&"add";if(r){this[r](p)}if(q===true||q===false){return q}else{return !o}};e.toString=function(){return this.join(" ")};if(b.defineProperty){var l={get:i,enumerable:true,configurable:true};try{b.defineProperty(m,a,l)}catch(h){if(h.number===-2146823252){l.enumerable=false;b.defineProperty(m,a,l)}}}else{if(b[f].__defineGetter__){m.__defineGetter__(a,i)}}}(self))}else{(function(){var b=document.createElement("_");b.classList.add("c1","c2");if(!b.classList.contains("c2")){var c=function(e){var d=DOMTokenList.prototype[e];DOMTokenList.prototype[e]=function(h){var g,f=arguments.length;for(g=0;g<f;g++){h=arguments[g];d.call(this,h)}}};c("add");c("remove")}b.classList.toggle("c3",false);if(b.classList.contains("c3")){var a=DOMTokenList.prototype.toggle;DOMTokenList.prototype.toggle=function(d,e){if(1 in arguments&&!this.contains(d)===!e){return e}else{return a.call(this,d)}}}b=null}())}};

function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; 

;var APP = {};

+function ($, viewport) {

	var s;
	
	APP = {
	    	swiper1: null,
	    	swiper2: null,

	        settings : {
	        },

	        init: function () {
	            s = this.settings;
	           
	            this.initTabbed();
	           	this.initHomeScreen();
	            this.initPreload();
	            this.initSwiper();
	            this.initForm();
	            this.initNavigation();
	            this.initSeparator();
	            this.initSticky();



	        },

	        initHomeScreen: function(){
	        	$('#home').css({'height':($(window).height())+'px'}).insertBefore('.wrapper');
	        	$('.wrapper').css({'margin-top':($(window).height())+'px'});
	        	css_browser_selector(navigator.userAgent);

	        },

	        initPreload: function(){

	        	$('#home, .wrapper').hide();

	        	$(window).load(function() {

	        		$('#home, .wrapper').fadeIn();
	        		$('.la-ball-clip-rotate').hide();

	        	});


	        },

	        initSwiper: function () {

	        		var swiperConfig = {
	        			nextButton: '#gallery-eskuvo .swiper-button-next',
	        			prevButton: '#gallery-eskuvo .swiper-button-prev',
	        			slidesPerView: 'auto',
	        			centeredSlides: true,
	        			paginationClickable: true,
	        	        spaceBetween: 1,
	        	        preloadImages: true,
	        	       // lazyLoading: true,
	        	        autoplayDisableOnInteraction: false
	        		};

	        		if(viewport.is('>xs')){
	        			swiperConfig.autoplay = 2500;	
	        		}

	        		$('.swiper-slide img').height($(window).height()-150);


	        		APP.swiper1 = new Swiper('#gallery-eskuvo .swiper-container', swiperConfig);

	        		swiperConfig.nextButton = '#gallery-beauty .swiper-button-next';
	        		swiperConfig.prevButton = '#gallery-beauty .swiper-button-prev';

	        		APP.swiper2 = new Swiper('#gallery-beauty .swiper-container', swiperConfig);



	        },

	        initForm: function () {

        	    $('input, textarea').floatlabel({
        			labelEndTop: -20,
        			paddingOffset: 0
        	    });

        	    $('input, textarea').placeholder();


        	    $('input').iCheck({
        	      checkboxClass: 'icheckbox_square-blue',
        	      radioClass: 'iradio_square-blue',
        	      increaseArea: '20%' // optional
        	    });

        	    if(!Modernizr.inputtypes.date) {
        	    	$('.datepicker').datepicker({
        	    		language: "hu",
        	    		container: "#contact-form",
        	    		format: "yyyy-mm-dd"
        	    	})
        	    }


	        },

	        initSeparator: function () {

	        	$('.separator-illustration').imageScroll({
	        	   image: null,
	        	   imageAttribute: 'image',
	        	   container: $('.wrapper'),
	        	   windowObject: $(window),
	        	   speed:.2,
	        	   coverRatio:.75,
	        	   coverRatio:1,
	        	   holderClass: 'imageHolder',
	        	   imgClass: 'img-holder-img',
	        	   holderMinHeight: 200,
	        	   holderMaxHeight: 350,
	        	   extraHeight: 50,
	        	   mediaWidth: 1600,
	        	   mediaHeight: 2000,
	        	   parallax: true,
	        	   touch: false
	        	});

	        },

	        initNavigation: function () {

	        	$('#top-nav .nav > li').eq(Math.floor($('#top-nav .nav > li').length / 2) - 1).addClass('center');

	        	$('.navbar-fixed-top a').click(function(event) {
	        		event.preventDefault();
	        	    var $anchor = $(this);
	        	    var $target = $($anchor.attr('href'));
	        	    if($target.length){

	        	    	$target = ($($anchor.attr('href')).attr('id').indexOf("info") > -1 && viewport.is('<=xs')) ? $($anchor.attr('href')).parent() : $($anchor.attr('href'));

	        	    	$('html, body').stop().animate({
	        	    	    scrollTop: ( ($target.attr('id') == 'home') ? 0 : $target.offset().top) - 70
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

	        	$(window).scroll(function(){
	        		if($(this).scrollTop() > $(window).innerHeight()) 
	        			$('#top-nav').addClass('inverse') 
	        		else 
	        			$('#top-nav').removeClass('inverse');

	        	})

	        	$(window).resize(function(){

	        		if( viewport.is('<=xs') ) return false;

	        		$('#home').css({'height':($(window).height())+'px'});
	        		$('.swiper-slide img').height($(window).height()-150);

	        		APP.swiper1.update();
	        		APP.swiper2.update();

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




	        },

	        initSticky: function () {

	        	$(window).load(function() {


	        		if( viewport.is('>xs') ) {

	        			$("[data-sticky_column]").stick_in_parent({
	        					parent: "[data-sticky_parent]",
	        					offset_top: 50,
	        					recalc_every: 1
	        			})
	        		}

	        		APP.swiper1.update();
	        		APP.swiper2.update();



	        	});

	        },

	        initTabbed: function () {

	        	$(window).load(function() {
		        	$('#info-eskuvo').tabCollapse();
		        	$('#info-beauty').tabCollapse();

				});


			    if( viewport.is('>xs') ) {


		    	    $('.nav-list li.active a').each(function(){
		    	    	$(this).closest('aside').find('img').attr('src', $($(this).attr('href')).find('img').attr('src'));
		    	    })

		    	    
		    	    $(document).on("shown.bs.collapse shown.bs.tab", ".panel-collapse, a[data-toggle='tab']", function(el){
		    	    	
		    	    	var $this = $(this);

		    	    	$(this).closest('aside').find('img').attr('src', $($(this).attr('href')).find('img').attr('src'));

		    	    	$(document.body).trigger("sticky_kit:recalc");


		    	    })



			    }


			    $(document).on("shown.bs.collapse shown.bs.tab", ".panel-collapse, a[data-toggle='tab']", function(el){
			    	
			    	var $this = $(this);
			    	
			    	var $targetEl = $this.attr('href') ? $($this.attr('href')) : $this; 


			    	$('html, body').stop().animate({
			    	    scrollTop: $targetEl.offset().top - (viewport.is('<=xs') ? 120 : 145)
			    	}, 400);

			    })



			    $(document.body).trigger("sticky_kit:recalc");




	        }



	    };



}(jQuery, ResponsiveBootstrapToolkit);


jQuery( document ).ready(function( $ ) {

		APP.init();
	try {
	}
	catch(err) {
	    alert(err.message);
	}


    $(window).load(function() {
    	// APP.swiper1.update();
    	// APP.swiper2.update();
    	// APP.swiper1.startAutoplay();
    	// APP.swiper2.startAutoplay();

    	$('.swiper-button-next').click();
		window.scrollTo(0,1);
		window.scrollTo(0,0);
    });



});


