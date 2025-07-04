<?php

$hauteur = 5;

// Génération du triangle ligne par ligne
for ($i = 0; $i < $hauteur; $i++) {
    // Espaces avant le /
    for ($j = 0; $j < $hauteur - $i -1; $j++) {
        echo "&nbsp;";
    }

    // Bord gauche
    echo "/";

    // Intérieur (soit vide, soit tirets à la base)
    if ($i == $hauteur - 1) {
        // Base du triangle
        for ($j = 0; $j < (2 * $i)-2; $j++) {
            echo "-";
        }
    } else {
        for ($j = 0; $j < 2 * $i; $j++) {
            echo "&nbsp;";
        }
    }

    // Bord droit
    echo "\\<br>";
}
?>
