$(".list-group-item").click(function() {
	if($(this).hasClass("toggled")){
		$(this).css({
			transition: 'height 0.4s ease-in-out',
			"height": "100px"	
		}).removeClass("toggled")
	}else{
		$(this).css({
			transition: 'height 0.4s ease-in-out',
			"height": "500px"
		}).addClass("toggled")
	}
});
