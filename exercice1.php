<?php


// envoie la circonférence d'un cercle
function circonCercle($r){
    return 2 * M_PI * $r;
}

// envoie la surface d'un cercle
function surfaceCercle($r){
    return M_PI * $r**2;
}

echo "          CALCUL D'UN CERCLE \n";

$boucle = "O"; // continuer le calcul tant que l'utilisateur demande de faire un autre calcul

while ($boucle == "O"){
    $rayon = readline("Quel est le rayon du cercle : ");
    echo "Sa circonférence est de       : " . circonCercle($rayon) . "\n";
    echo "Sa surface est de             : " . surfaceCercle($rayon) . "\n \n";
    $boucle = readline("Voulez-vous faire un autre calcul (O/N) \n \n");
}
echo "Au revoir et à bientôt!";