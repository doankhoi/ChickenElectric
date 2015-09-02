$(document).ready(function(){

	var browserHeight = window.innerHeight;
	$("#myCarousel").css("min-height",browserHeight+"px");
	$("#myCarousel").find('img').css("height", browserHeight+"px");
	$(".carousel .item").css("min-height", browserHeight+"px");
});