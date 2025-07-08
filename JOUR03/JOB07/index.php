<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = 0;

// Trouver la longueur de la chaîne
while (isset($str[$length])) {
    $length++;
}

if ($length > 0) {
    // Sauvegarder le premier caractère
    $firstChar = $str[0];
    
    // Décaler chaque caractère
    for ($i = 0; $i < $length - 1; $i++) {
        $str[$i] = $str[$i + 1];
    }
    
    // Remplacer le dernier caractère par le premier original
    $str[$length - 1] = $firstChar;
}

echo $str;
?>