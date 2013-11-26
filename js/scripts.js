$(function() {

	$("nav").sticky();

	// MAKE ALL INTERNAL LINKS SMOOTH SCROLLING	
	$('a[href^="#"]').click(function(e) {
		e.preventDefault();
		$.scrollTo($(this).attr('href'), 300);
	});

	// TRACK DOWNLOADS OF CINCH
	$('a[href="cinch.zip"]').on('click', function() {
		console.log('downloading...');
		ga('send', 'event', 'button', 'click', 'download');
	});

	// TRACK CLICKS TO GITHUB
	$('a[href*="github"]').click(function() {
		console.log('github...');
		ga('send', 'event', 'button', 'click', 'github');

		
	});

})