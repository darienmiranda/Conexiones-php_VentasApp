<?php
    $connect = new mysqli("localhost","root","","ventasapp");
    if($connect){

    }else{
        echo "Fallo, revise la ip o firewall";
        exit();
    }
?>