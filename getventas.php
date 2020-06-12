<?php
    include 'conexion.php';
    if(!isset($_POST['buscar']))
    {
        $_POST['buscar'] = "";
    }
    $buscar = $_POST['buscar'];

    $consult_categorias = $connect -> query("SELECT * FROM productos WHERE nom_producto LIKE '%".$buscar."%' OR des_producto LIKE '%".$buscar."%'ORDER BY id_producto DESC");

    $result = array();

    while($fetchData = $consult_categorias -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>