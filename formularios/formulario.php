<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con GET</title>
</head>
<body>
  <form action="./server.php" method="get">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" textarea="name">

    <label for="edad">Edad</label>
    <input type="text" name="edad" id="edad" textarea="age">

    <button type="submit" >Enviar Datos</button>
  </form>  
</body>
</html>