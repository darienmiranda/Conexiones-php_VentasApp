<?php
    include 'conexion.php';

    $email_id = $_POST['email_id'];
    $producto_id = $_POST['producto_id'];

    $consult_favoritos = $connect -> query("SELECT * FROM compras WHERE email_id = '$email_id' AND producto_id = '$producto_id' ");
    $resultado = array();
    while($extraerdatos = $consult_favoritos -> fetch_assoc()){
        $resultado[] = $extraerdatos;
    }


    if(mysqli_num_rows($consult_favoritos) == 0)
    {
        
        $registrar_favorito = $connect -> query("INSERT INTO compras(email_id, producto_id) VALUES('$email_id','$producto_id')"); 
    }
    
    echo json_encode($resultado);
?>