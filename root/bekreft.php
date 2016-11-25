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

				<?php
				echo("<form onsubmit='return valider();'>");
				echo("<h1 id='bekreftelse-header'>Bekreft bestilling</h1>");
				/* Denne matrisen ville vi ha hentet fra en database i et virkelig scenario: */
				$hyttenavn = array("HytteNavn1", "HytteNavn2", "HytteNavn3", "HytteNavn4", "HytteNavn5", "HytteNavn6");
				$hyttepris = array(400, 500, 600, 700, 800, 900);
				$nr = $_GET['nr'];

				echo("<table class='table'><tr><td>Valgt hytte</td><td>" . $hyttenavn[$nr-1] . "</td></tr>");
				echo("<tr><td>Hyttenummer</td><td>" . $nr . "</td></tr>");
				echo("<tr><td>Pris/døgn</td><td>kr " . $hyttepris[$nr-1] . ",-</td></tr></table>");
				
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



				<label for="navn">Fullt navn</label>
				<input type="text" id="navn" name="navn" required="true" pattern="[a-zA-Z ]">
				<label for="epost">Epost-adresse</label>
				<input type="email" id="epost" name="epost" min="0">
				<label for="tlf">Telefonnummer</label>
				<input type="text" id="tlf" pattern="[0-9]" name="tlf" required="true">
				<label for="adresse">Full faktureringsadresse</label>
				<textarea id="adresse" name="adresse"></textarea>

				<div class="split-wrapper">
					<input type="checkbox" name="vask" value="vask" id="vask">
					<div class="element-hoyre">
						<div class="tekst-venstre bekreftelse-check">Vaskehjelp etter utsjekk (+500,-)</div>
					</div>
				</div>
				<div class="split-wrapper">
					<input type="checkbox" name="turistforening" value="turistforening" id="turistforening">
					<div class="element-hoyre">
						<div class="tekst-venstre bekreftelse-check">Jeg er medlem av turistforeningen (-20%)</div>
					</div>
				</div>
				<div id="totalpris">1000 kr</div>
				<div>Hvordan vil du bekrefte kjøpet?</div>
				<input type="radio" name="epost" value="epost" checked>Epost
				<input type="radio" name="sms" value="sms" disabled id="margin-left-10">SMS
				<input type="submit" id="sendInn" value="Send ordrebekreftelse">
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
	<script src="scripts/valider.js"></script>
</body>
</html>
