<?php

echo "  ****    Table de multiplication **** \n \n";

$boucle = "O"; // continuer le calcul tant que l'utilisateur demande de faire un autre calcul

while ($boucle == "O"){
    $multi = readline("Entrer le nombre pour lequel vous voulez la table de la multiplication : \n") ;
    for ($i = 1; $i <=10; $i++){
        echo "$multi    x $i    = " . $i * $multi . "\n";
    }
    $boucle = readline("Voulez-vous continuez ? \n \n");
}