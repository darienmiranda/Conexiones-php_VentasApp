<?php
    include 'conexion.php';

    $id_categoria = $_POST['categoria_id'];

    $consult_categorias = $connect -> query("SELECT * FROM categorias WHERE id_categoria = '$id_categoria'");
    $resultado = array();

    while($extraerdatos = $consult_categorias -> fetch_assoc()){
        $resultado[] = $extraerdatos;
    } 

    if(mysqli_num_rows($consult_categorias) > 0)
    {
        $usuario = $_POST['persona_email'];
        $nom_producto = $_POST['nom_producto'];
        $des_producto = $_POST['des_producto'];
        $precio = $_POST['precio'];

        $fecha_producto = date("Y-m-d");

        $registrar_venta = $connect -> query("INSERT INTO productos(persona_email, nom_producto, des_producto, precio, categoria_id, fecha_producto) VALUES('$usuario', '$nom_producto', '$des_producto', '$precio', '$id_categoria', '$fecha_producto')"); 
    }
    
    echo json_encode($resultado);
?>