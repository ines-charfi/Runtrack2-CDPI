   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
        $nombreArguments = count($_POST);
        echo "<p>Le nombre d'argument POST envoyé est : " . $nombreArguments . "</p>";
        
       
    }
    ?>