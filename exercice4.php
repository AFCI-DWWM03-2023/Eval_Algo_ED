<?php

$tab1 = ["Avion", "BOING747", "AIRBUSA380", "LEARJET", "DC10", "CONCORDE", "ANTONOV32"];
$tab2 = ["CodeAvion", "BO", "AB", "LJ", "DC", "CO", "AN"];
$tab3 = ["VitesseCroisiere", 800, 950, 700, 900, 1400, 560];
$tab4 = ["RayonAction", 10000, 12000, 4500, 8000, 16000, 2500];
$boucle1 = "O";
$boucle2 = "O";

function recherche($tab1,$tab2,$tab3,$tab4){
    $verif = "F";
    while ($verif == "F"){
        $code = readline("Entrez le code de l'avion : ");
        for ($i=1;$i<count($tab2);$i++){
            if ($tab2[$i] == $code){
                $verif = ["V", $i]; // valide que l'avion est dans la basse de données et stocke l'index correspondant
            }
        }
        if ($verif[0] == "V"){
            echo "Avion : " . $tab1[$verif[1]] . " Vitesse : " . $tab3[$verif[1]] . " Rayon d'action : " . $tab4[$verif[1]] . "\n";
        }
        else{
            echo " Cet avion n'existe pas \n";
        }
    }
} // recherche si l'avion demandé est là

function statistique($tab1,$tab3,$tab4){
    $max = [0, "O"]; //stocke la vitesse max et le nom de l'avion
    for ($i=1;$i<count($tab1);$i++) {
        if ($max[0] < $tab3[$i]){
            $max[0] = $tab3[$i];
            $max[1] = $tab1[$i];
        }
    } // détermine la vitesse max
    echo " L'avion qui vole le plus vite est le $max[1] à $max[0] km/h \n";
    echo " La moyenne des rayons d'action est de : " . array_sum($tab4) / (count($tab4)-1) . "\n"; // affiche la moyenne du rayon d'action
}

echo " **** STATISTIQUES AVIONS   **** \n \n";

while ($boucle1 == "O" or $boucle2 == "O"){
    $verif = "F";
    if ($boucle1 == "O"){
        recherche($tab1, $tab2, $tab3, $tab4);
    }
    $boucle2 = readline("Voulez-vous éditer les statistiques (O/N) ");
    if ($boucle2 == "O"){
        statistique($tab1,$tab3,$tab4);
    }
    $boucle1 = readline("Voulez-vous faire une autre recherche (O/N) ");
}