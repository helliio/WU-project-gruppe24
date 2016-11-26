<?php
$nummer = $_GET['hyttenr'];
$start = $_GET['start'];
$dateStart = new DateTime($start);
$antall = $_GET['antall'];
$navn = $_GET['navn'];
$epost = $_GET['ep'];
$tlf = $_GET['tlf'];
$adresse = $_GET['adresse'];
$vask = $_GET['vask'];
$turistforening = $_GET['turistforening'];
$sumpris = $_GET['sum'];
$benevning = $_GET['benevning'];

$hyttenavn = array("Rød hytte", "Blå hytte", "Gul hytte", "Grønn hytte", "Lilla hytte", "Brun hytte");
$hyttepris = array(150, 500, 600, 200, 800, 900);

// Mottakeren av eposten:
$til = $epost;
// Dette nummeret er bare for show. Dersom vi benyttet oss av databaser, ville vi generere ordrenummeret på en annen måte.
$ordrenummer = rand(0, 10000);
// Emne
$emne = 'Ordrebekreftelse fra Fjell & Fjord A/S (ordrenummer #' . $ordrenummer . ')';
// Innhold (bør holdes kort)
$innhold = '
<html lang="no">
<head>
	<meta charset="utf-8">
	<title>Ordrebekreftelse fra Fjell &amp; Fjord (ordre #' . $ordrenummer . ')</title>
	<style>
		td {
			width: 33%;
		}
		div {
			margin: 20px 0;
		}
	</style>
</head>
<body>
	<div>Hei, ' . $navn . '!</div>
	<p>Takk for at lorem ipsum dolor sit amet, consectetur adipisicing elit, seds do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	<table style="width: 100%;">
		<tr>
			<td>Ordrenummer</td>
			<td>Hyttenummer</td>
			<td>Pris/' . $benevning . '</td>
		</tr>
		<tr>
			<td>#'. $ordrenummer . '</td>
			<td>#'. $nummer . '</td>
			<td>kr '. $hyttepris[$nummer-1] . ',-</td>
		</tr>
	</table>
	<table style="width: 100%; margin-top: 20px;">
		<tr>';
			if ($benevning == "time") {
				$innhold .= '
				<td>Antall timer</td>
				<td>Pris/time</td>
				<td>Sum</td>';
			} else {
				$innhold .= '
				<td>Antall døgn</td>
				<td>Pris/døgn</td>
				<td>Sum</td>';
			}
			$innhold .= '
		</tr>
		<td>' . $antall . '</td>
		<td>kr ' . $hyttepris[$nummer-1] . ',-</td>
		<td>kr ' . ($hyttepris[$nummer-1]*$antall) . ',-</td>
	</tr>
</table>';

if ($vask > 0) {
	$input .= '<div><b>Vaskehjelp:</b> +500,-</div>';
}
if ($turistforening > 0) {
	$input .= '<div><b>Medlem av turistforeningen: </b>-20%</div>';
}
$innhold .= '<div><b>Innsjekk: </b>' . $start . '</div>
<div>SUM TOTAL: <b>kr ' . $sumpris . ',-</b> (inkl. mva)</div>
<div>Vi behandler din bestilling.</div>
<div>
	Betaling skjer ved utsjekk.
	For å avbestille, lorem ipsum dolor sit amet oppmøte, consectetur adipisicing elit gebyr.<br/>
</div>
</body>
</html>';
// Obligatoriske headere for sending av HTML-mail:
$headere  = 'MIME-Version: 1.0' . "\r\n";
$headere .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headere .= 'To: ' . $navn . ' <' . $epost . '>' . "\r\n";
$headere .= 'From: Fjell og Fjord A/S <magnbakk@stud.ntnu.no>' . "\r\n";
$headere .= 'Cc: magnbakk@stud.ntnu.no' . "\r\n";
$headere .= 'Bcc: magnbakk@stud.ntnu.no' . "\r\n";
// Send epost
mail($til, $emne, $innhold, $headere);
// Videresend...
header('Location: http://org.ntnu.no/workingtitle/FjellOgFjord/takk.php?epost=' . $epost);
?>