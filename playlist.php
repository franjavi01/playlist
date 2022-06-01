<?php

include "conexionBaseDatos.php";
$conexion = mysqli_connect("localhost", "root", "", "playlist");

if (isset(($_POST['save']))){
    $song = $_POST['song'];
    $artist = $_POST['artist'];
    $year = $_POST['year'];
    $url = $_POST['url'];

    $query = "INSERT INTO mis_canciones_favoritas (Canción, Artista, Año, Url) VALUES ('$song', '$artist', '$year', '$url')";
    $resultado = mysqli_query ($conexion, $query);

    if(isset($conexion)){
        echo "Conectado a la base de datos";
    }

    if(!$resultado){
        echo " pero no esta guardando los datos";
    }else{
        echo " y guardado los datos";
    }

}