$(".hytte-header-container").click(function() {
	if($(this).hasClass("toggled")){
		$(this).closest('.list-group-item').css({
			transition: 'height 0.4s ease-in-out',
			"height": "100px"
		})
		$(this).removeClass("toggled")
	}else{
		
		$(this).closest('.list-group-item').css({
			transition: 'height 0.4s ease-in-out',
			"height": "500px"
		})
		$(this).addClass("toggled")
	}
});
