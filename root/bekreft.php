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
			$rs = $_GET['rs'];
			$vn = $_GET['vn'];
			$st = $_GET['st'];
			$kt = $_GET['kt'];
			echo "teeeeeeeest!" . $rs . $vn . $st . $kt;
			?>
			<form>
				<h1 id="bekreftelse-header">Bekreft bestilling</h1>
				Fornavn og etternavn:
				<input type="text" id="navn"name="navn" required="true">
				E-post adresse:
				<input type="email" id="epost" name="epost" min="0">
				Telefonnummer:
				<input type="text" id="tlf" name="tlf" required="true">
				Adresse:
				<input type="text" id="adresse" name="adresse" required="true">

				<div class="split-wrapper">
					<input type="checkbox" name="vask" value="vask">
					<div class="element-hoyre">
						<div class="tekst-venstre bekreftelse-check">Jeg har ikke anledning til å vaske opp etter oppholdet (+500,-)</div>
					</div>
				</div>
				<div class="split-wrapper">
					<input type="checkbox" name="turistforening" value="turistforening">
					<div class="element-hoyre">
						<div class="tekst-venstre bekreftelse-check">Jeg er medlem av turistforeningen (-20%)</div>
					</div>
				</div>

				Ekstra kommentarer:
				<textarea id="ekstraKommentar" name="sporsmal" form="usrform"></textarea>
				Hvordan vil du bekrefte kjøpet?
				<br/>
				<input type="radio" name="sms" value="sms" checked>SMS
				<input type="radio" name="epost" value="Epost" id="margin-left-10">Epost
				<button type="submit" id="sendInn">Bekreft bestilling</button>
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
