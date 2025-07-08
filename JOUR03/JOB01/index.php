<?php
// Création du tableau avec les nombres
$nombres = array(200, 204, 173, 98, 171, 404, 459);

// Début du tableau HTML
echo '<table border="1">';
echo '<tr><th>Nombre</th><th>Parité</th></tr>';

// Parcours du tableau
foreach ($nombres as $nombre) {
    echo '<tr>';
    echo '<td>'.$nombre.'</td>';
    
    // Vérification si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        echo '<td>Paire</td>';
    } else {
        echo '<td>Impaire</td>';
    }
    
    echo '</tr>';
}

// Fin du tableau HTML
echo '</table>';
?>