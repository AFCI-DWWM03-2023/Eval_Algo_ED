<?php

$chaine = readline("Entrez une chaîne de caractères : ");
$taille = strlen($chaine);

$voyelles = 0;
$tab = array('a', 'e', 'i', 'o', 'u', 'y');
foreach($tab as $voyelle){
 $voyelles += substr_count(strtolower($chaine), $voyelle);
}

$consonnes = 0;
$tab = array('z', 'r', 't', 'p', 'q', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'w', 'x', 'x', 'c', 'v', 'b', 'n');
foreach($tab as $consonne){
 $consonnes += substr_count(strtolower($chaine), $consonne);
}

$chiffres = 0;
$tab = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
foreach($tab as $chiffre){
 $chiffres += substr_count($chaine, $chiffre);
}

$speciaux = $taille - $voyelles - $consonnes - $chiffres;

echo "Nombre de caractères : " . $taille . "\n";
echo "Nombre de voyelles : " . $voyelles . "\n";
echo "Nombre de consonnes : " . $consonnes . "\n";
echo "Nombre de chiffres : " . $chiffres . "\n";
echo "Nombre de caractères alphabétiques : " . $voyelles + $consonnes . "\n";
echo "Nombre de caractères spéciaux : " . $speciaux . "\n";