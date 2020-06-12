<?php
    include 'conexion.php';

    $registernombre = $_POST['nom_usuario'];
    $registerapellido = $_POST['ape_usuario'];
    $registertelefono = $_POST['telefono'];
    $registeremail = $_POST['email'];
    $registerpassword = $_POST['password'];

    $validaremail = $connect -> query("SELECT * FROM usuarios WHERE email = '$registeremail' ");
    $resultado = array();

    if(mysqli_num_rows($validaremail) > 0)
    {
        while($extraerdatos = $validaremail -> fetch_assoc()){
            $resultado[] = $extraerdatos;
        }   
    }else{
        $registrar_usuario = $connect -> query("INSERT INTO usuarios(nom_usuario, ape_usuario, telefono, email, password) VALUES('$registernombre', '$registerapellido', '$registertelefono', '$registeremail', '$registerpassword')");
    }
    
    echo json_encode($resultado);
?>