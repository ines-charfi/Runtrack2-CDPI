 <?php
    if (!empty($_GET)) {
        echo '<h2>Arguments GET reçus</h2>';
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        
        foreach ($_GET as $argument => $valeur) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($argument) . '</td>';
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    }
    ?>