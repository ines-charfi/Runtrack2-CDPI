<?php
$username = isset($_POST['username']) ? $_POST['username'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
if ((!empty($username) && !empty($prenom))&&($username === 'jhon ') && ($prenom === 'Random')) {
    echo "<h2>Bienvenue, C'est pas ma guerre!</h2>";
   
} else {
    echo "<h2>Votre pire cauchemar.</h2>";
}
