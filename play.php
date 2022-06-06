<?php
$conexion = mysqli_connect("localhost", "root", "", "playlist");
$query = "SELECT * from mis_canciones_favoritas";
$resultado = mysqli_query($conexion, $query);
while($row = mysqli_fetch_array($resultado)){ 

?>
    
<video controls><source src="<?php echo $row['url'] ?>" type="video/mp4"></video>  

<?php } ?>

