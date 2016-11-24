$(".hytte-header-container").click(function() {
	if($(this).hasClass("toggled")){
		$(this).closest('.list-group-item').css({
			transition: 'height 0.4s ease-in-out',
			"height": "100px"
		})
		$('.hytte-toggle-arrow img', this).css({
			transform: "scaleY(1)"
		})
		$(this).removeClass("toggled")
	}else{
		
		$(this).closest('.list-group-item').css({
			transition: 'height 0.4s ease-in-out',
			"height": "500px"
		})
		$('.hytte-toggle-arrow img', this).css({
			transform: "scaleY(-1)"
		})
		$(this).addClass("toggled")
	}
});

$('.thumbnail').click(function() {
	var img = $(this).find('img').attr('src').replace("cropped/","")
	$('.imagepreview').attr('src', img);
	$('#imagemodal').modal('show');
});
