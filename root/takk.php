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
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
</head>
<body>

<a href="index.html">
	<header class="jumbotron text-center">
		<h1 class="logo">Fjell &amp; Fjord</h1>
		<p>Hytteutleie for alle!</p>
	</header>
</a>
	<main>
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
		<div class="section-separator"></div>
		<div class="aboutUsBackground">
			<div id="aboutUs" style="font-size: 12pt;">
				<h1>Takk!</h1>
				<p>Vi er har sendt en kvittering til deg på 
					<?php
						echo($_GET['epost']) . ".";
					?>
					<br/>
					Vennligst bekreft at opplysningene stemmer.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, seds do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

			</div>
		</div>

		<div id="copyright">
			<a href="index.html">Hjem</a><br>
			<a href="omoss.html">Om oss</a><br>
			<a href="kontakt.html">Kontakt oss</a><br>
			<p id="team24">Copyright © Team 24 (Working Title)</p>
		</div>

	</main>
	<script src="scripts/script.js"></script>
</body>
</html>
