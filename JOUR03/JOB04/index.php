<?php
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;

// Parcours de la chaîne caractère par caractère
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}

echo "La chaîne contient $count caractères.";
?>