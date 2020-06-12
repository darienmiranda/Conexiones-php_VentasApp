<?php
    include 'conexion.php';

    $perfil_usuario = $_POST['email'];

    $consultar = $connect -> query("SELECT * FROM usuarios WHERE email = '$perfil_usuario' ");

    $resultado = array();

    while($extraerdatos = $consultar -> fetch_assoc()){
        $resultado[] = $extraerdatos;
    }

    echo json_encode($resultado);
?>