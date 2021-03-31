<?php // datum.php

setlocale( LC_TIME, 'sv_SE.ISO_8859-1');  
$manad = date('F');
$veckodag = date('l');
$dagnummer = date('d');

if ($manad == "January") {$manad = "januari";}
if ($manad == "February") {$manad = "februari";}
if ($manad == "March") {$manad = "mars";}
if ($manad == "April") {$manad = "april";}
if ($manad == "May") {$manad = "maj";}
if ($manad == "June") {$manad = "juni";}
if ($manad == "July") {$manad = "juli";}
if ($manad == "August") {$manad = "augusti";}
if ($manad == "September") {$manad = "september";}
if ($manad == "October") {$manad = "october";}
if ($manad == "November") {$manad = "november";}
if ($manad == "December") {$manad = "december";}

if ($veckodag == "Monday") {$veckodag = "Måndag";}
if ($veckodag == "Tuesday") {$veckodag = "Tisdag";}
if ($veckodag == "Wednesday") {$veckodag = "Onsdag";}
if ($veckodag == "Thursday") {$veckodag = "Torsdag";}
if ($veckodag == "Friday") {$veckodag = "Fredag";}
if ($veckodag == "Saturday") {$veckodag = "Lördag";}
if ($veckodag == "Sunday") {$veckodag = "Söndag";}


$datum = $veckodag . " " . $dagnummer . " " . $manad;

?>
