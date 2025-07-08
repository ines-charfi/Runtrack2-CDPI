   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
        $nombreArguments = count($_GET);
        echo "<p>Le nombre d'argument GET envoyé est : " . $nombreArguments . "</p>";
        
       
    }
    ?>