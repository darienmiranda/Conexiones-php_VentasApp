<?php
    include 'conexion.php';

    $registercategoria = $_POST['nom_categoria'];

    $validarcategorias = $connect -> query("SELECT * FROM categorias WHERE nom_categoria = '$registercategoria' ");
    $resultado = array();

    if(mysqli_num_rows($validarcategorias) > 0)
    {
        while($extraerdatos = $validarcategorias -> fetch_assoc()){
            $resultado[] = $extraerdatos;
        }   
    }else{
        $registrar_usuario = $connect -> query("INSERT INTO categorias(nom_categoria) VALUES('$registercategoria')");
    }
    
    echo json_encode($resultado);
?>