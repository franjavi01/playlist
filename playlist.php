<?php

include "conexionBaseDatos.php";
$conexion = mysqli_connect("localhost", "root", "", "playlist");

if (isset(($_POST['guardar']))){
    $cancion = $_POST['cancion'];
    $artista = $_POST['artista'];
    $año = $_POST['año'];
    $url = $_POST['url'];

    $query = "INSERT INTO mis_canciones_favoritas (Nombre cancion, Artista, Año, Url) VALUES ('$cancion', '$artista', '$año', '$url')";
    $resultado = mysqli_query ($conexion, $query);

    if(!$resultado){
        echo "fallo";
    }else{
        echo "guardado";
    }

}