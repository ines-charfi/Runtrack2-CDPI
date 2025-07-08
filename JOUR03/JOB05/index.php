<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    'voyelles' => 0,
    'consonnes' => 0
];

// Définir les ensembles de voyelles et consonnes
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'à', 'â', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'ù', 'û', 'A', 'E', 'I', 'O', 'U', 'Y'];
$consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'];

// Parcourir la chaîne et compter les occurrences
for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i];
    if (in_array($char, $voyelles)) {
        $dic['voyelles']++;
    } elseif (in_array($char, $consonnes)) {
        $dic['consonnes']++;
    }
}

// Afficher les résultats dans un tableau HTML
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            margin: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Voyelles</td>
                <td><?= $dic['voyelles'] ?></td>
            </tr>
            <tr>
                <td>Consonnes</td>
                <td><?= $dic['consonnes'] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>