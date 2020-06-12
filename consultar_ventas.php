<?php
    include 'conexion.php';

    $buscar = $_POST['id'];

    $consult_categorias = $connect -> query("SELECT * FROM productos WHERE id_producto = '$buscar'");

    $result = array();

    while($fetchData = $consult_categorias -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>