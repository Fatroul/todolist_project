<?php

/*date("Y-m-d H:i:s")
$aujd=new DateTime("now", new DateTimeZone("europe/Paris"));
$firstday=$aujd->modify("first monday of");
var_dump($firstday);

$mois = date(m)=1;
var_dump($mois);
require "models/Month.php";
function mois() {
    $monthchoice = date("m");
    if ($monthchoice==1) {
        $mois = "Janvier";
        return $mois;
    }else if ($monthchoice==2) {
        $mois = "Février";
        return $mois;
    }else if ($monthchoice==3) {
        $mois = "Mars";
        return $mois;
    }else if ($monthchoice==4) {
        $mois = "Avril";
        return $mois;
    }else if ($monthchoice==5) {
        $mois = "Mai";
        return $mois;
    } else if ($monthchoice==6) {
        $mois = "Juin";
        return $mois;
    } else {$mois = "Décembre";}

}*/

$aujd = new DateTimeImmutable("now", new DateTimeZone("europe/Paris"));

$annee_courante = $aujd->format("Y");
$mois_courant = $aujd->format("m");
$jour_courant = $aujd->format("d");

$monthname = new Month($mois_courant);
var_dump ($month);