<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Arreglos</title>
</head>
<body>
  <form action="./server-arreglo.php" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="persona[nombre]" id="nombre">

    <label for="email">Correo: </label>
    <input type="email" name="persona[email]" id="email">

    <label for="edad">Edad: </label>
    <input type="number" name="persona[edad]" id="edad">

    <!-- Radios -->
    <label for="mexico">México</label>
    <input type="radio" name="pais" value="mexico" id="mexico">

    <label for="colombia">Colombia</label>
    <input type="radio" name="pais" value="colombia" id="colombia">

    <label for="peru">Perú</label>
    <input type="radio" name="pais" value="peru" id="peru">

    <!---- Múltiples imágenes ---->
    <label for="galeria">Carga tus imágenes</label>
    <input type="file" multiple name="galeria[]" id="galeria">

    <button type="submit" >Enviar Formulario</button>
  </form>  
</body>
</html>