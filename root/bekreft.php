<!DOCTYPE html>
<html lang="no">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="hytteutleie med tilgjengelighet for alle på fjellet ved fjorden i skogen">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link REL="stylesheet" type="text/css" href="style/tekst.css">
	<link REL="stylesheet" type="text/css" href="style/bootstrapstil.css">
	<title>Fjell &amp; Fjord: Hytteutleie For Alle</title>
</head>
<body>
	<a href="index.html">
		<header class="jumbotron text-center">
			<h1 class="logo">Fjell &amp; Fjord</h1>
			<p>Hytteutleie for alle!</p>
		</header>
	</a>
	<section>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<a data-toggle="collapse" href="#collapse1">
							<span class="visible-xs">
								<h2>Meny</h2>
							</span>
							<span class="visible-sm">
								<h2>Meny</h2>
							</span>
							<span class="visible-md">
								<h2>Meny</h2>
							</span>
							<span class="visible-lg">
								<h2>Meny</h2>
							</span>
						</a>
					</div>
				</div>
				<div id="collapse1" class="panel-collapse collapse">
					<a href="index.html"><div class="panel-body">Forside</div></a>
					<a href="omoss.html"><div class="panel-body">Om oss</div></a>
					<a href="kontakt.html"><div class="panel-body">Kontakt oss</div></a>
				</div>
			</div>
		</div>
	</section>

	<main>
		<div class="section-separator">
		</div>

		<div class="bekreftelse">
			<form>
				<h1 id="bekreftelse-header">Bekreft bestilling</h1>
				<?php
				/* Denne matrisen ville vi ha hentet fra en database i et virkelig scenario: */
				$hyttenavn = array("HytteNavn1", "HytteNavn2", "HytteNavn3", "HytteNavn4", "HytteNavn5", "HytteNavn6");
				$hyttepris = array(400, 500, 600, 700, 800, 900);

				$nr = $_GET['nr'];

				echo("<div class='split-wrapper'><div class='tekst-venstre' style='line-height: 20px;'>Valgt hytte</div><div class='element-hoyre'><input type='text' style='color: black !important; opacity: 0.5;' disabled required value='" . $hyttenavn[$nr-1] . " (nr " . $nr . ")'></div></div>");
				echo("<span>Pris/døgn:</span><span style='margin-left: 10px;'>" . $hyttepris[$nr] . ",- kr (inkl. mva)</span>");
				$kt = $_GET['kt'];
				if ($kt == 1) {
					echo("<div class='row'>");
					echo("<div class='col-md-5' style='line-height: 30px;'>Dato/tidspunkt innsjekk</div><div class='col-md-7'><input style='color: #FFF;' type='datetime-local'></div>");
					echo("</div><div class='row'>");
					echo("<div class='col-md-5' style='line-height: 30px;'>Dato/tidspunkt utsjekk</div><div class='col-md-7'><input style='color: #FFF;' type='datetime-local'></div>");
					echo("</div>");
				} else {
					echo("<div class='row'>");
					echo("<div class='col-md-4' style='line-height: 30px;'>Dato innsjekk</div><div class='col-md-8'><input type='date'></div>");
					echo("</div>");
					echo("<div class='row'>");
					echo("<div class='col-md-4' style='line-height: 30px;'>Overnattinger</div><div class='col-md-8'><input type='range' min='1' max='30'>");
					echo("<div id='labAntallOvernattinger'>6</div></div></div>");
				}
				?>



				Fornavn og etternavn:
				<input type="text" id="navn"name="navn" required="true">
				Epost-adresse
				<input type="email" id="epost" name="epost" min="0">
				Telefonnummer
				<input type="text" id="tlf" pattern="" name="tlf" required="true">
				Faktureringsadresse
				<input type="text" id="adresse" name="adresse" required="true">

				<div class="split-wrapper">
					<input type="checkbox" name="vask" value="vask">
					<div class="element-hoyre">
						<div class="tekst-venstre bekreftelse-check">Vaskehjelp etter utsjekk (+500,-)</div>
					</div>
				</div>
				<div class="split-wrapper">
					<input type="checkbox" name="turistforening" value="turistforening">
					<div class="element-hoyre">
						<div class="tekst-venstre bekreftelse-check">Jeg er medlem av turistforeningen (-20%)</div>
					</div>
				</div>

				Melding (valgfritt felt)
				<textarea id="ekstraKommentar" name="sporsmal" form="usrform"></textarea>
				Hvordan vil du bekrefte kjøpet?
				<br/>
				<input type="radio" name="epost" value="Epost" checked>Epost
				<input type="radio" name="sms" value="sms" disabled id="margin-left-10">SMS
				<button type="submit" id="sendInn">Videre...</button>
			</form>
		</div>

		<section>
			<div id="copyright">
				<a href="index.html">Hjem</a><br>
				<a href="omoss.html">Om oss</a><br>
				<a href="kontakt.html">Kontakt oss</a><br>
				<p>Copyright © Team 24 (Working Title)</p>
			</div>

		</section>
	</main>
	<script src="scripts/script.js"></script>
</body>
</html>
