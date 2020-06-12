<?php
    include 'conexion.php';

    $consult_categorias = $connect -> query("SELECT * FROM categorias ORDER BY id_categoria DESC");

    $result = array();

    while($fetchData = $consult_categorias -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>