<?php
$se_hablo_de_bruno = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Esto no se debe hacer -->
    <?php if ($se_hablo_de_bruno) {
        echo "😐";
    } else {
        echo "😁";
    }    
    ?>

    <!-- Esto es aceptable -->
    <h1><b>Esto es aceptable</b></h1>
    <?php if ($se_hablo_de_bruno) { ?>
        <h1>😐</h1>
    <?php } else { ?>
        <h1>😁</h1>
    <?php } ?> 
</body>
</html>