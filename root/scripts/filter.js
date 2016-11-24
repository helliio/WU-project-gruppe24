var $rows = $('.list-group .list-group-item');
$('.btn-filtrer').click(function() {
	/* var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase(); */
	if (document.getElementById('check-rullestol').checked) {
		document.getElementById("spesifikasjoner").value = "RULLESTOL ";
	} else {
		document.getElementById("spesifikasjoner").value = "";
	}
	if (document.getElementById('check-vann').checked) {
		$('#spesifikasjoner').val($('#spesifikasjoner').val() + 'VANN ');
	}
	if (document.getElementById('check-strom').checked) {
		$('#spesifikasjoner').val($('#spesifikasjoner').val() + 'STROM ');
	}

	var val = $.trim($('#spesifikasjoner').val()).replace(/ +/g, ' ').toLowerCase();
	$rows.show().filter(function() {
		var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
		return !~text.indexOf(val);
	}).hide();
});
/*
$(".check").change(function() {
	if(this.checked) {
		alert("TEST");
	}
});
*/