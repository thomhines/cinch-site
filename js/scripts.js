$(function() {

	$("nav").sticky();
	
	$('nav a').click(function(e) {
		e.preventDefault();
		$.scrollTo($(this).attr('href'), 300);
	});


	$('a[href="cinch.zip"]').on('click', function() {
		console.log('downloading...');
		ga('send', 'event', 'button', 'click', 'download button');
	});

})