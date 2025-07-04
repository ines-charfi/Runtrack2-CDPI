<?php
for ($nombre = 2; $nombre <= 1000; $nombre++) {
    $est_premier = true;
    for ($i = 2; $i< $nombre; $i++) {
        if ($nombre % $i == 0) {
            $est_premier = false;
            break;
        }
    }
    if ($est_premier) {
        echo $nombre . "<br />";
    }
}
?>
