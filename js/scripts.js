$(function() {
	
	// MAKE NAV STICK TO TOP OF SCREEN
	$("nav").sticky();
	
	// ADJUST STICKY WRAPPER WHEN PAGE IS RESIZED
	$(window).resize(function() {
		$('.sticky-wrapper').css('height', '');
	});
	
	

	// MAKE ALL INTERNAL LINKS SMOOTH SCROLLING	
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				scroll_target = target.offset().top - 100 + 'px';
				$('html,body').animate({ scrollTop: scroll_target }, 400);
				return false;
			}
		}
	});
	


	// TRACK DOWNLOADS OF CINCH
	$('a[href*=".zip"]').on('click', function() {
		console.log('downloading...');
		ga('send', 'event', 'button', 'click', 'download');
	});

	// TRACK CLICKS TO GITHUB
	$('a[href="https://github.com/thomhines/cinch"]').click(function() {
		console.log('github...');
		ga('send', 'event', 'button', 'click', 'github');
	});
	
	
	
	// MAKE FAQ CONTENT INTO AN ACCORDION
	$('.goodies li p').hide();
	$('.goodies h5').click(function() {
		$(this).next().slideToggle(100);
	})

});




