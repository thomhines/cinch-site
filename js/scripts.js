$(function() {

	$("nav").sticky();
	
	$('nav a').click(function() {
		$.scrollTo($(this).attr('target'), 300, {offset:-95});
	});

})