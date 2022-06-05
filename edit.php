<?php
$conexion = mysqli_connect("localhost", "root", "", "playlist");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM mis_canciones_favoritas WHERE id = $id";
    $resultado = mysqli_query ($conexion, $query);
    if(mysqli_num_rows($resultado) == 1){
        $row = mysqli_fetch_array($resultado);
        $song = $row['Canción'];
        $artist = $row['Artista'];
        $year = $row['Año'];
        $url = $row['Url'];
    }
}

if(isset($_POST['save'])){
    $id = $_GET['id'];
    $song = $_POST['Canción'];
    $artist = $_POST['Artista'];
    $year = $_POST['Año'];
    $url = $_POST['Url'];


    $query = "UPDATE mis_canciones_favoritas set Canción = '$song', Artista ='$artist', Año = '$year', Url = '$url' WHERE id = '$id'";
    mysqli_query($conexion, $query);
    header("Location: index.php");
}

?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="cancion" class="form-label">Canción:</label>
                    <input type="text" class="form-control" name="Canción" value="<?php echo $song; ?>">
                </div>
                <div class="mb-3">
                    <label for="artista" class="form-label" >Artista:</label>
                    <input type="text" class="form-control" name="Artista" value="<?php echo $artist; ?>">
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label-file">Año:</label>
                    <input type="number" min="1900" max ="2100" class="form-control" name="Año" value="<?php echo $year; ?>">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Enlace:</label>
                    <input type="text" class="form-control" name="Url" value="<?php echo $url; ?>">
                </div>
                <button type="submit" class="btn btn-warning" name="save">Enviar</button>
            </form>
        </div>
</div>