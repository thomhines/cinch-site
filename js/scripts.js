$(function() {

	$("nav").sticky();

	// MAKE ALL INTERNAL LINKS SMOOTH SCROLLING	
	$('a[href^="#"]').click(function(e) {
		e.preventDefault();
		$.scrollTo($(this).attr('href'), 300, {offset: -80});
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

})