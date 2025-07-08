<?php
$mybool = true;
$myint = 8;
$mystr = "Salut";
$myfloat = 7.4;
?>

<table border="1">
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>boolean</td>
        <td>$mybool</td>
        <td><?php echo $mybool ? 'true' : 'false'; ?></td>
    </tr>
    <tr>
        <td>int</td>
        <td>$myint</td>
        <td><?php echo $myint; ?></td>
    </tr>
    <tr>
        <td>string</td>
        <td>$mystr</td>
        <td><?php echo $mystr; ?></td>
    </tr>
    <tr>
        <td>float</td>
        <td>$myFloat</td>
        <td><?php echo $myfloat; ?></td>
    </tr>
</table>
