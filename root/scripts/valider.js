function valider() {
	
	var vnavn = $("#navn").val();
	var vepost = $("#epost").val();
	var vtlf = $("#tlf").val();
	var vadresse = $("#adresse").val();
	var start = $("#start").val();
	var slutt = $("#slutt").val();
	var antall = $("#antall").val();

	if ((vnavn.length >= 4) && (vepost.length >= 6) && (vtlf.length >= 4) && (vadresse.length >= 15)) {
		return true;
	} else {
		return false;
	}
}
