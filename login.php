<?php
    include 'conexion.php';

    $loginuser = $_POST['email'];
    $loginpass = $_POST['password'];

    $consultar = $connect -> query("SELECT * FROM usuarios WHERE email = '$loginuser' AND password ='$loginpass'");
    
    $resultado = array();

    while($extraerdatos = $consultar -> fetch_assoc()){
        $resultado[] = $extraerdatos;
    }

    echo json_encode($resultado);
?>