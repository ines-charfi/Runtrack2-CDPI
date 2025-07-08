<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$inverse = "";

// Parcours de la chaîne de la fin vers le début
for ($i = 0; isset($str[$i]); $i++) {} // Trouve la longueur sans strlen()
$length = $i;

for ($i = $length - 1; $i >= 0; $i--) {
    $inverse .= $str[$i];
}

echo $inverse;
?>