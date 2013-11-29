$(document).ready(function(){
	$('.wrapper').append('<div id="top"></div>');
	$(window).scroll(function() {
		if($(this).scrollTop() > 100) {
			$('#top').fadeIn();	
		} else {
			$('#top').fadeOut();
		}
	});
 
	$('#top').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});