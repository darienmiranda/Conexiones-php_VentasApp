<?php
    include 'conexion.php';

    $consult_categorias = $connect -> query("SELECT * FROM productos ORDER BY id_producto DESC");

    $result = array();

    while($fetchData = $consult_categorias -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>