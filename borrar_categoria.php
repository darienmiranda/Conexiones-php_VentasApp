<?php
    include 'conexion.php';

    $deletecategoria = $_POST['id_categoria'];

    $categoria_en_uso = $connect -> query("SELECT * FROM productos WHERE categoria_id = '$deletecategoria'");
    $resultado = array();
    while($extraerdatos = $categoria_en_uso -> fetch_assoc()){
        $resultado[] = $extraerdatos;
    }
    if(mysqli_num_rows($categoria_en_uso) == 0)
    {
        $borracat = $connect -> query("DELETE FROM categorias WHERE id_categoria='$deletecategoria'");
    }

    echo json_encode($resultado);
    
?>