<?php
$nummer = $_GET['hyttenr'];
$start = $_GET['start'];
$slutt = $_GET['slutt'];
$antall = $_GET['antall'];
$navn = $_GET['navn'];
$epost = $_GET['ep'];
$tlf = $_GET['tlf'];
$adresse = $_GET['adresse'];
$vask = $_GET['vask'];
$turistforening = $_GET['turistforening'];

$hyttenavn = array("HytteNavn1", "HytteNavn2", "HytteNavn3", "HytteNavn4", "HytteNavn5", "HytteNavn6");
$hyttepris = array(400, 500, 600, 700, 800, 900);
// Kan ha to mottakere her, men vi vil sende en annerledes epost til admin.
$til = $epost;
// Dette nummeret er bare for show. Dersom vi benyttet oss av databaser, ville vi generere ordrenummeret på en annen måte.
$ordrenummer = rand(0, 10000);
// Emne
$emne = 'Ordrebekreftelse fra Fjell & Fjord A/S (ordrenummer ' . $ordrenummer . ')';
// Innhold (bør holdes kort)
$innhold = '
<html lang="no">
<head>
	<meta charset="utf-8">
	<title>Ordrebekreftelse fra Fjell &amp; Fjord (ordre #' . $ordrenummer . ')</title>
</head>
<body>
	<p>Takk for Lorem ipsum dolor sit amet, consectetur adipisicing elit, seds do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	
	<table style="width: 100%; background-color: red;"><tr><td>Ordrenummer</td><td>Hyttenummer</td><td>Pris/døgn</td><td>Timeleie</td></tr>
	<tr><td>#'. $ordrenummer . '</td><td>#'. $nummer . '</td><td>kr '. $hyttepris[$nummer-1] .',- ' . ($hyttepris[$nummer-1]*$antall) . ',-</td></tr>';

    if ($antall >= 1) {
	    $innhold .='<tr><td>#'. $ordrenummer . '</td><td>#'. $nummer . '</td><td>kr '. $hyttepris[$nummer-1] . ',- x ' . $antall . ' døgn = kr ' . ($hyttepris[$nummer-1]*$antall) . ',-</td></tr>';
    } else {
    	$date1 = new DateTime($_GET['start']);
		$date2 = new DateTime($_GET['slutt']);
		// The diff-methods returns a new DateInterval-object...
	$diff = $date2->diff($date1);
	// Call the format method on the DateInterval-object

	    $innhold .='<tr><td>#'. $ordrenummer . '</td><td>#'. $nummer . '</td><td>kr '. $hyttepris[$nummer-1] . ',- x ' . $diff->format('%R%a') . ' = ??,-</td></tr>';
    }
    $innhold .= '
  </table>
    Dato:
    <br/>
    Antall overnattinger: 
    <br/>
    Totalpris:
</body>
</html>
';
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