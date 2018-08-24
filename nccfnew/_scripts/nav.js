$(function() {
	const mq = window.matchMedia( "(min-width: 1200px)" );

	if (mq.matches) {
		$(window).on('scroll', function(){
			if($(window).scrollTop() > 500){
				$('nav').addClass('navScroll');
			}
			else {
				$('nav').removeClass('navScroll');
			}
		});
	};

	

	$("#hamBurger").click(function() {
		console.log("working");
		$("#hamBurger").toggleClass('active');
		$("#navMenu").toggleClass('active');
	});
});

