<?php
    include 'conexion.php';

    $usuario = $_POST['persona_email'];

    $consult_categorias = $connect -> query("SELECT * FROM productos WHERE persona_email = '$usuario' ORDER BY id_producto DESC");

    $result = array();

    while($fetchData = $consult_categorias -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>