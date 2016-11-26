function valider(korttid) {
	// Henter input-verdiene direkte fra dokumentets (bekreft.php) HTML
	var vnavn = $("#navn").val();
	var vepost = $("#ep").val();
	var vtlf = $("#tlf").val();
	var vadresse = $("#adresse").val();
	var start = $("#start").val();

	// Vi bruker 4 forskjellige regular expressions for å teste om input er i forventet format. Regexen for dato avhenger av om hytten er markert for korttidsutleie.
	var epostRegEx = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$/g;
	var navnRegEx = /^[a-zA-ZæøåÆØÅ]{1}([a-zæøå]*[\- ][a-zA-ZæøåÆØÅ]){0,1}([a-zæøå]{1,19})+$/g;
	var tlfRegEx = /[0-9]+/g;
	var datoRegEx = /(0[1-9]|1[0-9]|2[0-9]|3[01])[\./](0[1-9]|1[012])[\./]20(1[6-9]|[2-9][0-9])/g;
	if (korttid == 1) {
		datoRegEx = /(0[1-9]|1[0-9]|2[0-9]|3[01])[\./](0[1-9]|1[012])[\./]20(1[6-9]|[2-9][0-9]) (0[0-9]|1[0-9]|2[0-4]):([0-5][0-9])/g;
	}

	if (epostRegEx.test(vepost) == false) {
		// Hvis noe er galt med dette feltet, fokuser på feltet. Her burde vi også endre på CSS-en for å bedre indikere feilen.
 		document.getElementById('ep').focus();
 		// Hvis funksjonen returnerer 'false', vil ikke skjemaet gå til send.php for å sendes via epost. Vi setter den til false hvis noe er galt.
 		// Fordi jeg er usikker på om kjøringen av koden stopper ved return, går vi kun videre gjennom else.
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
}