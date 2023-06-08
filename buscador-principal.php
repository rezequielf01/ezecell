<?php
    include("db.php");

    if($_POST['busqueda'] != "") {
        
        $query = "SELECT * FROM celulares WHERE nombre LIKE '%".$_POST["busqueda"]."%'";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
        
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            $marca = $row['marca'];
            $modelo = $row['modelo'];
            $url = $row['url'];
            $precio = $row['precio'];
            $estado = $row['estado'];
            
            ?> <a class="buscador__a" href="<?php echo $url ?>">
                <img class="buscador__img" src="data:image/png;base64, <?php echo base64_encode($row['img']); ?>"> <?php echo $marca." ".$modelo." ".$row['memoria']."<br>"."$estado"."<br>"."$".$precio."<br>"?>
            </a>

            <?php
        }
    }
?>

