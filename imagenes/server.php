<?php

// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";

$baseFile = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$route = "images/$baseFile";

move_uploaded_file($image, $route);

echo "El archivo $baseFile ha sido guardado exitosamente";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $route ?>" alt=" <?= $baseFile ?> ">
</body>
</html>