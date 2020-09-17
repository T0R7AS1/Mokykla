<?php

use userApp\User;

for ($i = 1; $i <= 10; $i++){

$user = new User('50114225660', "eividas", "galvanauskas", "programer", "Eividasg7@gmail.com","500","Dirbantis");
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #494949;
            color: white;
        }
    </style>
</head>
<body>

<h2>Darbuotoju info</h2>

<table>
    <tr>
        <th>kodas</th>
        <th>vardas</th>
        <th>pavarde</th>
        <th>pareigos</th>
        <th>pastas</th>
        <th>uzmokestis</th>
        <th>busena</th>
    </tr>
    <?php for ($i = 1; $i <= 10; $i++){
        echo "<tr>";
        foreach ($user->showProfile() as $item){ ?>
            <?php echo '<td>'. $item .'</td>';
        }
        echo "</tr>";
    } ?>

</table>

</body>
</html>