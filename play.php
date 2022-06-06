<?php
$conexion = mysqli_connect("localhost", "root", "", "playlist");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM mis_canciones_favoritas WHERE id = $id";
    $resultado = mysqli_query ($conexion, $query);
    if(mysqli_num_rows($resultado) == 1){
        $row = mysqli_fetch_array($resultado);
        $url = $row['Url'];
    }
}

?>

<video controls autoplay><source src="<?php echo $url; ?>" type="video/mp4"></video> 

