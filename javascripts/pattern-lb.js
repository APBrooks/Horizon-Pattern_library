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
function leftNavPersistence() {
	if ($('.left-nav .collapse a').hasClass('active')) {
		$('.left-nav .collapse a.active').parent().addClass('in');
		var collapser = $('.left-nav .collapse a.active').parent().prevAll('a[data-toggle="collapse"]:first');
		if (collapser.hasClass('closed')) {
			collapser.removeClass('closed');
			collapser.addClass('open');
			collapser.children('.fa').removeClass('fa-angle-right');
			collapser.children('.fa').addClass('fa-angle-down');
		} else {
			collapser.removeClass('open');
			collapser.addClass('closed');
			collapser.children('.fa').removeClass('fa-angle-down');
			collapser.children('.fa').addClass('fa-angle-right');
		};
	};
}

// Document ready
$(document).ready(function() {
	
	// Open Nav accordion if needed
	leftNavPersistence();
	// accordion icon switcher
	accordSwitcher();
	// Restrict Accordion to one panel
	// $('#accordion1').on('show.bs.collapse', function () {
 //        $('#accordion1 .in').collapse('hide');
 //        console.log('Accordion pressed');
 //    });

	// on resize window call functions
});