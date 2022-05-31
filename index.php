<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Mi lista de reprodución</title>
</head>
<body>

<?php include "conexionBaseDatos.php"; ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="playlist.php" method="POST">
                <div class="mb-3">
                    <label for="cancion" class="form-label">Nombre de la canción:</label>
                    <input type="text" class="form-control" name="cancion">
                </div>
                <div class="mb-3">
                    <label for="artista" class="form-label" >Artista:</label>
                    <input type="text" class="form-control" name="artista">
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label-file">Año:</label>
                    <input type="number" min="1900" max ="2100" class="form-control" name="año">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Enlace:</label>
                    <input type="text" class="form-control" name="url">
                </div>
                <button type="submit" class="btn btn-warning" name="guardar">Enviar</button>
            </form>
        </div>

        <div class="col-md-8">

        </div>

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
    </div>    
</div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <tbody>
</body>
</html>