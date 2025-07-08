<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i = 0;

// On parcourt la chaîne caractère par caractère
while (isset($str[$i])) {
    echo $str[$i];
    $i += 2; // On saute un caractère sur deux
}
?>