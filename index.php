<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi lista de reprodución</title>
</head>
<body>

<?php
include "conexionBaseDatos.php";
$conexion = mysqli_connect("localhost", "root", "", "playlist");
$sql = "SELECT * FROM mis canciones favoritas";
$query = mysqli_query($conexion, $sql);
?>

<form action="#" method="post">
        <div class="mb-3">
            <label for="cancion" class="form-label">Nombre de la canción:</label>
            <input type="text" class="form-control" name="cancion">
        </div>
        <div class="mb-3">
            <label for="artista" class="form-label" >Artista:</label>
            <input type="text" class="form-control-file" name="artista">
        </div>
        <div class="mb-3">
            <label for="año" class="form-label">Año:</label>
            <input type="number" class="form-control" name="año">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Enlace:</label>
            <input type="text" class="form-control" name="url">
        </div>
        <button type="submit" class="btn btn-warning" name="guardar">Enviar</button>
    </form>

    <!-- <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Curso</th>
                <th scope="col">Imagen</th>
                <th scope="col">Precio</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead> -->
        <tbody>
</body>
</html>