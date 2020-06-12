<?php
    include 'conexion.php';

    $email_usuario = $_POST['email'];
    
    $consultar = $connect -> query("SELECT * FROM favoritos A, productos B WHERE (B.id_producto = A.producto_id) AND (A.email_id = '$email_usuario') ORDER BY A.id_compra DESC");
    $resultado = array();

    while($extraerdatos = $consultar -> fetch_assoc()){
        $resultado[] = $extraerdatos;
    }

    echo json_encode($resultado);
?>