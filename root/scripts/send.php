<?php
// Merk at vi helst skulle ønske å validere og behandle dette direkte i PHP (her fungerer PHP kun som en formidler av informasjon) for å
// hindre angrep på serveren eller eieren av epost-adressen. Det ville være uaktuelt å stole på disse verdiene og sende dem avgårde bare
// fordi et eller annet script på en besøkers datamaskin sa at de var til å stole på. Men for oppgaven og karakterens skyld, har jeg latt
// være å escape variablene, for å gjøre så lite som mulig i PHP.

// Hyttenummeret til den bestilte hytten, brukes for å hente pris og navn fra matriser lengre ned.
$nummer = $_GET['hyttenr'];
// Variabelen $start avhenger av om hytten er markert for korttidsutleie. I så fall vil $start ha formatet: DD.MM.YYYY XX:XX. I det
// motsatte tilfellet, vil den mangle klokkeslett, fordi oppholdet regnes i benevningen 'døgn', ikke 'time'. Dessuten vil dette være
// viktig informasjon når oppholdet varer i maks ett døgn.
$start = $_GET['start'];
// Jeg har en plan for denne, men fikk ikke tid til å implementere det nå. Akkurat no bruker vi en string, fordi vi ikke bruker DateTime
// for å beregne antall døgn og timer. Om vi gjorde det, kunne en hytte være tilgjengelig for både normal utleie og korttidsutleie.
$dateStart = new DateTime($start);
// Antall døgn eller timer, avhengig av korttidsutleie-markering.
$antall = $_GET['antall'];

// Personopplysningene brukeren oppga.
$navn = $_GET['navn'];
$epost = $_GET['ep'];
$tlf = $_GET['tlf'];
$adresse = $_GET['adresse'];

// Statusen til checkboxer: 1 = valgt, 0 = ikke valgt.
$vask = $_GET['vask'];
$turistforening = $_GET['turistforening'];

// Fordi vi skal gjøre så mye som mulig i JavaScript, bruker vi summen som ble kalkulert ved bestilling.
$sumpris = $_GET['sum'];

// Vanlig hytte: døgn; hytte for korttidsleie: time.
$benevning = $_GET['benevning'];

// Fordi vi ikke bruker et DBMS i dette prosjektet, lagrer vi navnene til de 6 hyttene i en matrise i den rekkefølgen de vises på forsiden.
$hyttenavn = array("Rød hytte", "Blå hytte", "Gul hytte", "Grønn hytte", "Lilla hytte", "Brun hytte");

// Pris (kr) på enten ett døgn eller en time, avhengig av om hytten er for korttidsutleie. I vårt eksempel er den første hytten ("Rød hytte") og den fjerde hytten ("Grønn hytte") slike tilfeller.
$hyttepris = array(150, 500, 600, 200, 800, 900);

// Mottakeren av eposten. Ny variabel kun for semantiske hensikter.
$til = $epost;
// Dette nummeret er bare for show. Dersom vi benyttet oss av databaser, ville vi generere ordrenummeret på en annen måte. Denne ville være primærnøkkelen i en tabell for ordre.
$ordrenummer = rand(0, 10000);
// Emne i eposten.
$emne = 'Ordrebekreftelse fra Fjell & Fjord A/S (ordrenummer #' . $ordrenummer . ')';
// Innholdet i eposten (denne funksjonen (mail()) bør ikke brukes for kompleks HTML-epost)
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
			// Hvis benevningen er time, vis "Antall timer" i stedet for "Antall døgn".
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

			// Legg til i de riktige cellene i tabellen: antall, pris per døgn eller time, antall ganger pris.
			// -1 brukes fordi matrisen hyttepris[] er nullbasert, imens den første hytta i listen vi har laget har hyttenummer 1.
			$innhold .= '
		</tr>
		<td>' . $antall . '</td>
		<td>kr ' . $hyttepris[$nummer-1] . ',-</td>
		<td>kr ' . ($hyttepris[$nummer-1]*$antall) . ',-</td>
	</tr>
</table>';

// Jeg bruker > 0 i stedet for = 1 fordi jeg stadig opplever at checkboxer har verdien 127. Dersom disse er positive, er de huket av. Hvis de er 0 (eller av en eller annen grunn, negative), er de ikke huket av. Hvis de er huket av, har prisforskjellen allerede blitt kalkulert via JavaScript og sendt hit. Dette er bare for å vise hva som er blitt bestilt og hva det koster.
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
<div>
	Med vennlig hilsen,<br/>
	Team 24 (Working Title)
</div>
</body>
</html>';

// Obligatoriske headere, jeg bruker min egen NTNU-konto av praktiske grunner.
$headere  = 'MIME-Version: 1.0' . "\r\n";
$headere .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headere .= 'To: ' . $navn . ' <' . $epost . '>' . "\r\n";
$headere .= 'From: Fjell og Fjord A/S <magnbakk@stud.ntnu.no>' . "\r\n";
$headere .= 'Cc: magnbakk@stud.ntnu.no' . "\r\n";
$headere .= 'Bcc: magnbakk@stud.ntnu.no' . "\r\n";
// Send epost (igjen, det finnes bedre løsninger, men denne funksjonen får jobben gjort her).
mail($til, $emne, $innhold, $headere);
// Går til "takk.php" og gir epost-adressen til takk-scriptet direkte gjennom URL-en; epost-adressen kodes automatisk.
header('Location: http://org.ntnu.no/workingtitle/FjellOgFjord/takk.php?epost=' . $epost);
?>