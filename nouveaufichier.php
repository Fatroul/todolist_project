<?php
/*$array = [];
$variable = "Bonjour et au revoir ! Je m'appelle John Doe, j'ai 27 ans, j'habite en France et travaille depuis que j'ai 20 ans. Ma passion : écrire des mots, mits, mets, mats, mat... Pour me contacter, vous pouvez envoyer un email à contact@johndoe.fr ou contact@johndoe.com ou bien m'appeler au 06 07 08 09 10. Vous pouvez aussi aller voir mon blog à l'adresse johndoe-blog.fr. Bonjour et au revoir";
preg_match_all("#m[a-z]ts#",$variable,$array,PREG_OFFSET_CAPTURE);
var_dump ($array);*/

$name = "lkkeo";
if (preg_match('#^[a-zA-ZæœéèêëàâîïôùûüÿçÀÂÉÈÔÙÛÇÆŒ]$#', $name)) {
    echo "Le nom entré est correct.";
    // On peut ajouter le numéro à la base de donnée
} else {
    echo "Le nom entré est incorrect.";
    // On ne peut pas ajouter le numéro à la base de donnée
}