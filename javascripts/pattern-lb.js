// Accordion style switcher
function accordSwitcher() {
	$('.left-nav a[data-toggle="collapse"]').click(function() {
		// console.log('Clicked!');
		if ($(this).hasClass('closed')) {
			$(this).removeClass('closed');
			$(this).addClass('open');
			$(this).children('.fa').removeClass('fa-angle-right');
			$(this).children('.fa').addClass('fa-angle-down');
		} else {
			$(this).removeClass('open');
			$(this).addClass('closed');
			$(this).children('.fa').removeClass('fa-angle-down');
			$(this).children('.fa').addClass('fa-angle-right');
		};
	});
}

// Document ready
$(document).ready(function() {
	// accordion icon switcher
	accordSwitcher();

	// on resize window call functions
});