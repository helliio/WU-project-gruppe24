$(".list-group-item").click(function() {
	if($(this).hasClass("t")){
		var h = $(this).height() + 22
		$(this).css({
			//transition: 'height 0.2s ease-in-out',
			"height": (h-100) + "px"	
		}).removeClass("t")
	}else{
		var h = $(this).height() + 22
		$(this).css({
			//transition: 'height 0.2s ease-in-out',
			"height": (h+100) + "px"
		}).addClass("t")
	}
});