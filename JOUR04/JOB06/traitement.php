<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    if (($nombre % 2) == 0) {
    echo "le nombre $nombre est paire";
    }
    else 
    { 
     echo "le nombre $nombre est impaire";
    }

 }
