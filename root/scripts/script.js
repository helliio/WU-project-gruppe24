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

$(function() {
		$('.thumbnail').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
});
