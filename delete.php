<?php
$conexion = mysqli_connect("localhost", "root", "", "playlist");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE from mis_canciones_favoritas WHERE id = $id";
    $resultado = mysqli_query ($conexion, $query);
    if(!$resultado){
        echo "No se puede eliminar";
    }else{
        header("Location: index.php");
    }
}