$(".list-group-item").click(function() {
	if($(this).hasClass("t")){
		var h = $(this).height() + 22
		$(this).css({
			transition: 'height 0.4s ease-in-out',
			"height": "100px"	
		}).removeClass("t")
	}else{
		var h = $(this).height() + 22
		$(this).css({
			transition: 'height 0.4s ease-in-out',
			"height": "500px"
		}).addClass("t")
	}
});