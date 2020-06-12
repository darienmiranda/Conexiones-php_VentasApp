<?php
    include 'conexion.php';

    $consult_usuarios = $connect -> query("SELECT * FROM usuarios");

    $result = array();

    while($fetchData = $consult_usuarios -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>