<?php
    $conexion = mysqli_connect("localhost", "root", "", "playlist");
    if (isset($_GET['id']))
    $query = "SELECT * from mis_canciones_favoritas";
    $resultado = mysqli_query ($conexion, $query);

    // if(!$resultado){
    //     echo "No encuentra la canción";
    // }else{
    //     echo "Reproduciendo canción";
    // }

    while($row = mysqli_fetch_array($resultado)){ ?>
        <!-- <video src="<?php $row['Url']; ?>"></video> -->
        <video src="https://ipfs.infura.io/ipfs/QmWn7cpJhwe49CXBex6NXoQLd4Hytt8PB6WBdeBin68DFs" autoplay></video>
    <?php } ?>
