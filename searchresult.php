<?php

include ("db.php");

    $searchContent = $_POST['modelo'];

    if($searchContent != ""){
        $query = "SELECT * FROM celulares WHERE nombre LIKE '%$searchContent%'";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
                
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            ?>
                    <a href="<?php echo $row["url"]; ?>" class="producto-card__a" id="producto-card__a">
                        <article class="producto-card" id="producto-card">
                            <img class="producto-card__img" src="data:image/png;base64, <?php echo base64_encode($row['img']); ?>">
                            <div class="producto-card-info" id="producto-card-info">
                                <h2 class="producto-card__h2"><?php echo $row["marca"]." ".$row["modelo"]; ?></h2>
                                <p class="producto-card__p"><?php echo $row["estado"]; ?> </p>
                                <h3 class="producto-card__h3"><?php echo "$".number_format($row["precio"],2); ?> </h3>
                            </div>
                        </article>
                    </a>
                <?php
        }

    }
    else{
        $query = "SELECT * FROM celulares";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
                
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            ?>
                    <a href="<?php echo $row["url"]; ?>" class="producto-card__a" id="producto-card__a">
                        <article class="producto-card" id="producto-card">
                            <img class="producto-card__img" src="data:image/png;base64, <?php echo base64_encode($row['img']); ?>">
                            <div class="producto-card-info" id="producto-card-info">
                                <h2 class="producto-card__h2"><?php echo $row["marca"]." ".$row["modelo"]; ?></h2>
                                <p class="producto-card__p"><?php echo $row["estado"]; ?> </p>
                                <h3 class="producto-card__h3"><?php echo "$".number_format($row["precio"],2); ?> </h3>
                            </div>
                        </article>
                    </a>
                <?php
        }
    }

?>