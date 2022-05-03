$(document).ready(function() {

	// TOP

	$('html, body').stop().animate({scrollTop: 0}, 2000);
	
	
	// NAV ICON

	function toggler_nav(){
		$('.navbar-toggler i').toggleClass('bi bi-x-circle');;
	}

	$('.navbar-toggler').on('click', toggler_nav);

	
	// SCROLL MOOTH

	$('a.link-menu').on('click', function(e){

		$('a.link-menu').removeClass('active');
		$(this).addClass('link-menu active')

		e.preventDefault();

		const scroll = $($(this).attr('href')).offset().top

		$('html, body').stop().animate({
			scrollTop: scroll
		}, 2000);


	});


	// SERVICES (RESPONSIVE-DESIGN)

	function services(){
		if($(window).width() <= 992){
			$('.items').attr('class', 'items row justify-content-center align-items-center');
		}else{
			$('.items').attr('class', 'items row justify-content-between align-items-center');
		}
	}


	//PHONE ORIENTATION (RESPONSIVE DESIGN)

	function phone_orientation(){
		
		if($(window).width() <= 992 && $(window).width() >= 500 && $(window).height() <= 700){

			const banner = $('<div>').attr({class : 'banner-form', id : 'banner-form'});

			const banner_img = $('<div>').attr('class', 'banner-img');

			$('.banner-form').after(banner.append(banner_img));

		}else{

			$('#banner-form').remove();
		}

	}

	$(window).resize(services);
	services();

	$(window).resize(phone_orientation);
	phone_orientation();

});