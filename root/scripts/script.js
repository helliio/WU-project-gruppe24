$(".list-group-item").click(function() {
	if($(this).hasClass("t")){
		var h = $(this).height() + 22
		$(this).css({
			transition: 'height 0.4s ease-in-out',
			"height": (h-300) + "px"	
		}).removeClass("t")
	}else{
		var h = $(this).height() + 22
		$(this).css({
			transition: 'height 0.4s ease-in-out',
			"height": (h+300) + "px"
		}).addClass("t")
	}
});