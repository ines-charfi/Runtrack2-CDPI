 <?php
    if (!empty($_POST)) {
        echo '<h2>Arguments POST reçus</h2>';
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        
        foreach ($_POST as $argument => $valeur) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($argument) . '</td>';
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    }
    ?>