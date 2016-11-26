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

var hyttePris = $('#sum').val() / 15;

function updateUI() {
	$('#labAntallOvernattinger').text($('#antall').val());
	var pris = $('#antall').val() * hyttePris;
	if($('#vask').prop("checked")) {
		pris += 500;
	}
	if($('#turistforening').prop("checked")) {
		pris *= .8;
	}
	$('#totalpris').text('kr ' + pris + ',-');
	$('#sum').val(pris);
}

$('#antall').change(updateUI).mousemove(updateUI);
$('#vask').change(updateUI);
$('#turistforening').change(updateUI);

updateUI();