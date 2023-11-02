<?php

$possi=["Pierre", "Feuille", "Ciseaux"];
$boucle = "Oui";

while ($boucle=="Oui"){
    $Utilisateur = 0;
    $ordinateur = 0;
    $manche = 0;
    $partie = 0;
    $manche++;
    echo "Manche $manche \n";
    while ($partie < 3){
        $partie++;
        $ordi = $possi[rand(0,2)];
        echo "Partie $partie ";
        $joueur = readline("Choisissez (Pierre/Feuille/Ciseaux) : ");
        switch ($joueur){
            case (($joueur != "Pierre") and ($joueur != "Feuille") and ($joueur != "Ciseaux")):
                echo $joueur;
                echo "Choix invalide. Choisissez (Pierre/Feuille/Ciseaux) \n";
                $partie--;
                break;
            case (($joueur == "Pierre" and $ordi == "Ciseaux") or ($joueur == "Feuille" and $ordi == "Pierre") or ($joueur == "Ciseaux" and $ordi == "Feuille")):
                echo "L'ordinateur choisit : $ordi \n";
                echo "Utilisateur gagne! \n";
                $Utilisateur++;
                break;
            case (($joueur == "Ciseaux" and $ordi == "Pierre") or ($joueur == "Pierre" and $ordi == "Feuille") or ($joueur == "Feuille" and $ordi == "Ciseaux")):
                echo "L'ordinateur choisit : $ordi \n";
                echo "Ordinateur gagne! \n";
                $ordinateur++;
                break;
            case ($joueur == $ordi):
                echo "L'ordinateur choisit : $ordi \n";
                echo "Egalité \n";
                $partie--;
                break;
        }

    }
    echo "Score après la manche $manche : Utilisateur ($Utilisateur) - Ordinateur ($ordinateur)";
    $boucle = readline("Voulez-vous continuer à jouer? (Oui/Non) : ");
    file_put_contents("resultat.txt","$manche : Utilisateur ($Utilisateur) - Ordinateur ($ordinateur)",FILE_APPEND);
}

echo "Fin du jeu. Le résultat a été enregistré dans le fichier resultat.txt ";