<?php

function racine2degres($A, $B, $C){
    $D = $B**2 - 4*$A*$C;
    switch ($A){
        case ($D <= 1 and $A != 0) :
            echo " L'équation ne possède pas de racine réelle : \n d = $D \n \n";
            break;
        case ($A==0 and $B != 0) :
            $x = -($C/$B);
            echo " L'équation est du premier degré ! \n \n L'équation s'annule pour x=-(c/b) : $x \n \n";
            break;
        case ($A == 0 and $B == 0):
            echo " L'équation n'en est plus une !!! \n \n";
            break;
        case ($D == 0):
            $x1 = - ($B / (2 * $A));
            echo " L'équation possède une racine double : \n d = $D \n x1=x2= $x1 \n \n";
            break;
        case ($D > 0):
            $x1 = (-$B + sqrt($D))/(2*$A);
            $x2 = (-$B - sqrt($D))/(2*$A);
            echo " L'équation possède 2 racines distinctes : \n d = $D \n x1= $x1 \n x2= $x2 \n \n";
            break;
    }
    

}

$boucle = "O"; // continuer le calcul tant que l'utilisateur demande de faire un autre calcul

while ($boucle == "O"){
    $a = readline("Quel est la valeur de a : \n") ;
    $b = readline("Quel est la valeur de b : \n") ;
    $c = readline("Quel est la valeur de c : \n") ;
    echo "\n";
    racine2degres($a,$b,$c);
    $boucle = readline("Voulez-vous continuez ? ");
}