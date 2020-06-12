<?php
    include 'conexion.php';

    $deleteproducto = $_POST['id_producto'];


    $borracat = $connect -> query("DELETE FROM productos WHERE id_producto='$deleteproducto'");
    $connect -> query("DELETE FROM favoritos WHERE producto_id = '$deleteproducto' ");
?>