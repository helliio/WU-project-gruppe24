$(".hytte-header-container").click(function(){
	if($(this).hasClass("toggled")){
		$(this).closest('.list-group-item').css({
			transition: 'height 0.4s ease-in-out',
			"height": "100px"
		})
		$('.bestillingsknapper', this.closest('.list-group-item')).css({
			transition: 'opacity 0.4s ease-in-out',
			"opacity": "0"
		})
		$('.hytte-toggle-arrow img', this).css({
			transform: "scaleY(1)"
		})
		var objekttest = $('.bestillingsknapper', this.closest('.list-group-item'));
		setTimeout(skjulObjekt.bind(null, objekttest), 500);
		$(this).removeClass("toggled")
	} else {
		$('.bestillingsknapper', this.closest('.list-group-item')).css({
			"display": "inline"
		})
		var objekttest = $('.bestillingsknapper', this.closest('.list-group-item'));
		setTimeout(visObjekt.bind(null, objekttest), 400);

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

function skjulObjekt(objekt){
	objekt.css({
		"display": "none",
	});
}

function visObjekt(objekt){
	objekt.css({
		transition: 'opacity 0.4s ease-in-out',
		"opacity": "1"
	});
}