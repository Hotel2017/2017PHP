$(document).ready(function(){
	
	 var docw = $(document).width() - 600;
	 $("#slider_arrow_right").click(function(){
		$("#sidebar_box_wrapper").animate({
			scrollLeft: $("#sidebar_box_wrapper").scrollLeft() + docw
		}, 1000,function(){});   
	 });
	 $("#slider_arrow_left").click(function(){
		$("#sidebar_box_wrapper").animate({
			scrollLeft: $("#sidebar_box_wrapper").scrollLeft() - docw
		}, 1000,function(){});   
	 });

});