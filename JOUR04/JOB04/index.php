<!DOCTYPE html>
<html>
<head>
    <title>Affichage des arguments GET</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    
</head>
<body>
    <h1>Formulaire de test GET</h1>
    
    <form method="POST" action="traitement.php">
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" value="Ines">
        </div>
        
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="Charfi">
        </div>
        
        <div>
            <label for="age">Âge:</label>
            <input type="text" id="age" name="age" value="41">
        </div>
        
        <div>
            <label for="ville">Ville:</label>
            <input type="text" id="ville" name="ville" value="Martigues">
        </div>
        
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
    
   
</body>
</html>