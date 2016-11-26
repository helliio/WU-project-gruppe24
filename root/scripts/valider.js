function valider(korttid) {
	var vnavn = $("#navn").val();
	var vepost = $("#ep").val();
	var vtlf = $("#tlf").val();
	var vadresse = $("#adresse").val();
	var start = $("#start").val();
	
	var epostRegEx = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$/g;
	var navnRegEx = /^[a-zA-ZæøåÆØÅ]{1}([a-zæøå]*[\- ][a-zA-ZæøåÆØÅ]){0,1}([a-zæøå]{1,19})+$/g;
	var tlfRegEx = /[0-9]+/g;
	var datoRegEx = /(0[1-9]|1[0-9]|2[0-9]|3[01])[\./](0[1-9]|1[012])[\./]20(1[6-9]|[2-9][0-9])/g;
	if (korttid == 1) {
		datoRegEx = /(0[1-9]|1[0-9]|2[0-9]|3[01])[\./](0[1-9]|1[012])[\./]20(1[6-9]|[2-9][0-9]) (0[0-9]|1[0-9]|2[0-4]):([0-5][0-9])/g;
	}

	if (epostRegEx.test(vepost) == false) {
 		document.getElementById('ep').focus();
 		return false;
 	} else if (navnRegEx.test(vnavn) == false) {
 		document.getElementById('navn').focus();
 		return false;
 	} else if (tlfRegEx.test(vtlf) == false) {
 		document.getElementById('tlf').focus();
 		return false;
 	} else if (datoRegEx.test(start) == false) {
 		document.getElementById('start').focus();
 		return false;
 	} else if (vadresse.length < 8 || vadresse.length > 100) {
 		document.getElementById('adresse').focus();
 		return false;
 	} else {
 		return true;
 	}

	//if !(datoRegEx.test(start)) {
		//document.getElementById('start').focus();
		//alert("Nei 1");
		//return false;

 		//document.getElementById('navn').focus();

	/* } else if !(epostRegEx.test(vepost)) {
		document.getElementById('ep').focus();
		alert("Nei 3");
		return false;
 	} else if !(tlfRegEx.test(vtlf)) {
 		document.getElementById('tlf').focus();
 		alert("Nei 4");
 		return false;
 	} else if !(vadresse.length > 8 && vadresse.length < 100) {
 		alert("Nei 5");
 		return false;
 	*/
}