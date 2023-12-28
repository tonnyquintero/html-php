<?php
$teams = ["boca", "river", "estudiantes", "independiente", "racing", "velez"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Holaaaa</h1>

    <ul>
        <?php for ($i = 0; $i < 10 ; $i++): ?>

            <li><?= $i ?></li>
            
        <?php endfor; ?>
    </ul>

    <h1>Lista de Equipos</h1>

    <ul>
        <?php foreach ($teams as $team) : ?>
            <li><?=
            $team;
            ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>