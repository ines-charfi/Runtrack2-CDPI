<?php

for ($i = 0; $i <= 1337; $i++) {
    // Si le nombre est dans la liste des exclus, on ne l'affiche pas
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        continue; // Passe au suivant
    }
    echo $i . "<br />";
}
?>
