<?php

    $host = "localhost";
    $dbname = "ezecell";
    $username = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    try {
        // echo "Conexion a bdd exitosa";
    } catch (PDOException $error) {
        echo "Error al conectar a la bdd"." ".$error;
    }

?>